<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Base\Model\Entity;

use Doctrine\DBAL\Connection;

/**
 * Description of Repository
 *
 * @author leonardo
 */
class Repository
{
    private $doctrine;
    private $entityName;
    private $entityClass;
    
    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getEntityName()
    {
        if(is_null($this->entityName))
        {
            $repositoryName   = $this->stripNamespaceFromClassName(get_called_class());
            $this->entityName = str_replace('Repository', '', $repositoryName);
        }
        
        return $this->entityName;
    }

    private function stripNamespaceFromClassName($classname)
    {
        if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
            $classname = $matches[1];
        }

        return $classname;
    }
    
    /**
     * Obtiene la instancia de Connection de doctrine dbal.
     * 
     * @return Connection
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }
    
    public function find(array $filters = array(), $hydrateObject = true)
    {
        $query  = 'SELECT * FROM ' . $this->getTableName();
        $params = array();
        $query .= $this->getQueryFilter($filters, $params);
        $result = $this->getDoctrine()->fetchAll($query, $params);
        
        return ($hydrateObject) ? $this->getHidratedObjectResult($result) : $result;
    }
    
    public function findOne(array $filters = array(), $hydrateObject = true)
    {
        $query  = 'SELECT * FROM ' . $this->getTableName();
        $params = array();
        $query .= $this->getQueryFilter($filters, $params) . ' LIMIT 1';
        $result = $this->getDoctrine()->fetchAssoc($query, $params);
        
        return ($hydrateObject) ? $this->hidrateAsObject($result) : $result;
    }
    
    private function getQueryFilter(array $filters, &$params)
    {
        $query = '';
        
        if(count($filters) > 0)
        {            
            $where = true;
            foreach ($filters as $key => $filter)
            {
                if($where)
                {
                    $where = false;
                    $query .= ' WHERE ' . $key . ' = ?';
                    $params[] = $filter;
                }else
                {
                    $query .= ' AND ' . $key . ' = ?';
                    $params[] = $filter;
                }
            }
        }
        
        return $query;
    }
    
    private function getHidratedObjectResult(array $result = array())
    {
        $hidratedResult = array();
        foreach ($result as $key => $value)
        {
            $hidratedResult[] = $this->hidrateAsObject($value);
        }
        
        return $hidratedResult;
    }
    
    private function hidrateAsObject(array $data = array())
    {
        $entityClass = $this->getEntityClass();
        $entity      = new $entityClass();
        
        foreach ($data as $key => $value)
        {
            $entity->__set($key, $value);
        }
        
        return $entity;
    }
    
    public function getEntityClass()
    {
        if(is_null($this->entityClass))
        {
            $repoPath  = get_called_class();
            $namespace = str_replace($this->getEntityName() . 'Repository', '', $repoPath);
            $this->entityClass = $namespace . $this->getEntityName();
        }
        
        return $this->entityClass;
    }
    
    public function getTableName()
    {
        return strtolower($this->getEntityName());
    }
    
    public function save(&$object)
    {
        if($this->isNew($object))
        {
            return $this->create($object);
        }
        
        return $this->update($object);
    }
    
    public function create($object)
    {
        $rows = $this->getDoctrine()->insert($this->getTableName(), $this->getObjectArrayData($object));
        
        if($rows > 0)
            return $this->findOne(array('id' => $this->getDoctrine()->lastInsertId()));
        
        return false;
    }
    
    public function update($object)
    {
        $rows = $this->getDoctrine()->update($this->getTableName(), $this->getObjectArrayData($object, 'update'), array('id' => $object->__get('id')));
        
        if($rows > 0)
            return $object;
        
        return false;
    }
    
    private function getObjectArrayData($object, $for = 'create')
    {
        $properties = $this->getObjectProperties($object);
        $objectData = array();
        unset($properties['id']);
        foreach ($properties as $key => $value)
        {
            $objectData[$value] = $object->__get($value);
        }
        
        if($for === 'create' || $for === 'update')
        {
            if (array_key_exists('created_at', $objectData))
                $objectData['created_at'] = date('Y-m-d H:i:s', time());
            if (array_key_exists('updated_at', $objectData))
                $objectData['updated_at'] = date('Y-m-d H:i:s', time());
        }
        if($for === 'update')
        {
            if (array_key_exists('created_at', $objectData))
                unset($objectData['created_at']);
        }
        
        return $objectData;
    }
    
    public function isNew($object)
    {
        if(is_null($object->__get('id')))
            return true;
        return false;            
    }
    
    private function getObjectProperties($object)
    {
        $reflect = new \ReflectionClass($object);
        $properties  = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_PRIVATE);
        $_properties = array();
        foreach ($properties as $key => $value)
        {
            $_properties[] = $value->getName();
        }
        
        return $_properties;
    }
    
    /**
     * 
     * @param type $alias
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function createQueryBuilder($alias = null)
    {
        if(is_null($alias))
            $alias = $this->getEntityName ();
        
        $builder = $this->getDoctrine()->createQueryBuilder()
                ->select($alias.'.*')
                ->from($this->getTableName(), $alias);
        
        return $builder;
    }
    
    public function getResults(\Doctrine\DBAL\Query\QueryBuilder $query, $hydrateObject = true)
    {
        $result = $query->execute()->fetchAll();
        return ($hydrateObject) ? $this->getHidratedObjectResult($result) : $result;
    }
}

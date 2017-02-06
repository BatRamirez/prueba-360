<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Base\Controllers;

use Doctrine\DBAL\Connection;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Twig_Environment;
use Symfony\Component\HttpFoundation\Response;
use Lumen\Model\Entity\Repository;

/**
 * Description of baseController
 *
 * @author leonardo
 */
class Controller
{
    protected $container;
    
    public function __construct($container)
    {
        $this->container = $container;
    }
    
    public function getContainer()
    {
        return $this->container;
    }
    
    public function get($key)
    {
        return $this->container[$key];
    }
    
    /**
     * Obtiene la instancia de Connection de doctrine dbal.
     * 
     * @return Connection
     */
    public function getDoctrine()
    {
        return $this->container['db'];
    }
    
    /**
     * Crea y retorna una instancia de Form del tipo type.
     * 
     * @param string|FormTypeInterface $type    The built type of the form
     * @param mixed                    $data    The initial data for the form
     * @param array                    $options Options for the form
     *
     * @return Form
     */
    public function createForm($type, $data = null, array $options = array())
    {
        return $this->getFormFactory()->create($type, $data, $options);
    }
    
    /**
     * Crea y retirna una instancia de formBuilder.
     * 
     * @param mixed $data    The initial data for the form
     * @param array $options Options for the form
     *
     * @return FormBuilder
     */
    public function createFormBuilder($data = null, array $options = array())
    {
        return $this->getFormFactory()->createBuilder('form', $data, $options);
    }
    
    /**
     * 
     * @return \Symfony\Component\Form\FormFactory
     */
    public function getFormFactory()
    {
        return $this->container['form.factory'];
    }
    
    /**
     * Instancia del motor de templeteo.
     * 
     * @return Twig_Environment
     */
    public function getTemplating()
    {
        return $this->container['twig'];
    }
    
    /**
     * Renderiza el template referenciado.
     * 
     * @param string $view Nombre del template.
     * @param array $parameters Arreglo con los parametros para utilizar en la vista.
     * 
     * @return string La vista renderizada.
     */
    public function renderView($view, array $parameters = array())
    {
        return $this->getTemplating()->render($view, $parameters);
    }
    
    /**
     * Genera un response de tipo json.
     * 
     * @param type $data
     * @param type $status
     * @param type $headers
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderJson($data, $status = 200, $headers = array())
    {
        // fake content-type so browser does not show the download popup when this
        // response is rendered through an iframe (used by the jquery.form.js plugin)
        //  => don't know yet if it is the best solution
        if ($this->get('request')->get('_xml_http_request')
            && strpos($this->get('request')->headers->get('Content-Type'), 'multipart/form-data') === 0) {
            $headers['Content-Type'] = 'text/plain';
        } else {
            $headers['Content-Type'] = 'application/json';
        }
        
        return new Response(json_encode($data), $status, $headers);
    }
    
    /**
     * 
     * @param string $className
     * @return Repository
     */
    public function getRepository($className)
    {
        $className = $className . 'Repository';
        
        return new $className($this->getDoctrine());
    }
    
}

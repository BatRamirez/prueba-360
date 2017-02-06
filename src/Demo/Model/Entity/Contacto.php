<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Demo\Model\Entity;

/**
 * Description of Contacto
 *
 * @author leonardo
 */
class Contacto
{
    private $id;
    
    protected $nombre;
    
    protected $correo;
    
    protected $comentario;
    
    protected $created_at;
    
    protected $updated_at;
    
    
    public function __set($name, $value)
    {
        $this->$name = $value;
        
        return $this;
    }
    
    public function __get($name)
    {
        return $this->$name;
    }
}

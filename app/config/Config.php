<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author leonardo
 */
class Config
{
    private $config = array(
        'db' => array(
            'driver'   => 'pdo_mysql',
            'host'     => '127.0.0.1',
            'dbname'   => 'database_name',
            'user'     => 'root',
            'password' => 'root'
        )
    );


    public function get($key)
    {
        return $this->config[$key];
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function addConfig($key, $config)
    {
        $this->config[$key] = $config;
    }
}

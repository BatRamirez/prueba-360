<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Base\Command;

use Symfony\Component\Console\Application;
//use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
/**
 * Description of BaseCommand
 *
 * @author leonardo
 */
class Command
{
    protected $input;
    protected $output;
    protected $console;
    protected $name;
    protected $command;
    protected $root_dir;


    public function __construct($name, $console)
    {
        $this->name     = $name;
        $this->console  = $console;        
        $this->command  = $this->getConsole()->register($name);
        $this->root_dir = __DIR__.'/../../../';
    }
    
    public function init()
    {
        $this->configure();
        $command = $this;
        $this->getCommand()->setCode(
            function(InputInterface $input, OutputInterface $output) use ($command)
            {
                $command->setInput($input);                
                $command->setOutput($output);
                $command->execute();
            }
        );
        
    }
    
    /**
     * 
     * @return Application
     */
    public function getConsole()
    {
        return $this->console;
    }
    
    /**
     * 
     * @return \Symfony\Component\Console\Command\Command
     */
    public function getCommand()
    {
        return $this->command;
    }
    
    public function configure()
    {
        die('No se ha implementado la funcion configure');
    }
    
    public function execute()
    {
        die('No se ha implementado la funcion execute');
    }
    
    public function setInput($input)
    {
        $this->input = $input;
    }
    
    public function setOutput($output)
    {
        $this->output = $output;
    }
}

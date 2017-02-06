<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Base\Command;

/**
 * Description of CacheClearCommand
 *
 * @author leonardo
 */
class CacheClearCommand extends Command
{
    public $app;
    
    public function __construct($name, $console, $app)
    {
        $this->app = $app;
        
        parent::__construct($name, $console);
    }
    
    public function configure()
    {
        $this->getCommand()->setDescription('Limpia la cache de los templates de twig.')
                           ->setHelp('Usage: <info> php console.php cache:clear </info>');
    }
    
    public function execute()
    {
        $this->output->writeln("");
        $this->output->writeln("<fg=green>Limpiando la cache...</fg=green>");
        $this->app['twig']->clearCacheFiles();
        $this->output->writeln("");
        $this->output->writeln("<fg=blue>Listo ٩(͡๏̯͡๏)۶</fg=blue>");
        $this->output->writeln("");
    }

}

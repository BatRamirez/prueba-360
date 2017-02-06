<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Base\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Output\OutputInterface;
//use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Process\Process;

/**
 * Description of deployCommand
 *
 * @author leonardo
 */
class DeployCommand extends Command
{

    public function configure()
    {
        $this->getCommand()
                ->setDescription('Deploy your project via rsync')
                ->addArgument('env', InputArgument::REQUIRED, 'The environment where you want to deploy the project')
                ->addOption('go', null, InputOption::VALUE_NONE, 'Do the deployment')
                ->addOption('rsync-options', null, InputOption::VALUE_NONE, 'Options to pass to the rsync executable')
                ->addOption('force-vendor', null, InputOption::VALUE_NONE, 'Force sync of vendor dir.')
                
        ;
    }

    public function execute()
    {
        $config_root_path = __DIR__.'/config/';
        $config = Yaml::parse($config_root_path.'deployCommandConfig.yml');

        $available_env = $config['deploy'];
        
        $this->output->getFormatter()->setStyle('notice', new OutputFormatterStyle('red', 'yellow'));

        $env = $this->input->getArgument('env');
        
        if (!in_array($env, array_keys($available_env))) {
            throw new \InvalidArgumentException(sprintf('\'%s\' is no a valid environment. Valid environments: %s', $env, implode(",",array_keys($available_env))));
        }
        
        foreach ($available_env[$env] as $key => $value) {
            $$key = $value;
        }

        $ssh = 'ssh -p '.$port.'';
        
        if ($this->input->getOption('rsync-options'))
            $rsync_options = $this->input->getOption('rsync-options');

        if ($this->input->getOption('force-vendor'))
            $rsync_options .= " --include 'vendor' ";

        if (file_exists($config_root_path.'rsync_exclude.txt')) {
            $rsync_options .= sprintf(' --exclude-from=%srsync_exclude.txt', $config_root_path);
        } else {
            
            $this->output->writeln(sprintf('<notice>File %s not exists. Nothing excluded.</notice> If you want a rsync_exclude.txt template get it here http://bit.ly/rsehdbsf2', $config_root_path."rsync_exclude.txt"));
            $this->output->writeln("");
        }

        $dryRun = $this->input->getOption('go') ? '' : '--dry-run';
        
        $user = ($user !='') ? $user."@" : "";

        $command = "rsync $dryRun $rsync_options -e \"$ssh\" $this->root_dir $user$host:$dir";

        $this->output->writeln(sprintf('%s on <info>%s</info> server with <info>%s</info> command',
            ($dryRun) ? 'Fake deploying' : 'Deploying',
                '',
            $command));

        $process = new Process($command);
        $process->setTimeout(($timeout == 0) ? null : $timeout);

        $this->output->writeln("\nSTART deploy\n--------------------------------------------");
        
        $process->run(function ($type, $buffer) {
                        if ('err' === $type) {
                            $this->output->write( 'ERR > '.$buffer);
                        } else {
                            $this->output->write($buffer);
                        }
                    });

        $this->output->writeln("\nEND deploy\n--------------------------------------------\n");
        
        if ($dryRun) {
            $this->output->writeln('<notice>This was a simulation, --go was not specified. Post deploy operation not run.</notice>');
            $this->output->writeln(sprintf('<info>Run the command with --go for really copy the files to %s server.</info>', 'Production'));

        } else {
            
            $this->output->writeln(sprintf("Deployed on <info>%s</info> server!\n", $env));

            if ( isset($post_deploy_operations) && count($post_deploy_operations) > 0 ) {
                
                $post_deploy_commands = implode("; ", $post_deploy_operations);

                $this->output->writeln(sprintf("Running post deploy commands on <info>%s</info> server!\n", $env));

                $command = "$ssh $user$host 'cd $dir;".$post_deploy_commands."'";

                $process = new Process($command);
                $process->setTimeout(($timeout == 0) ? null : $timeout);
                $process->run(function ($type, $buffer) {
                        if ('err' === $type) {
                            $this->output->write( 'ERR > '.$buffer);
                        } else {
                            $this->output->write($buffer);
                        }
                    });

                $this->output->writeln("\nDone");

            } 

        }
        $this->output->writeln("");
        $this->output->writeln("<fg=blue>Listo fin del Deployment ٩(͡๏̯͡๏)۶</fg=blue>");
        $this->output->writeln("");
    }

}

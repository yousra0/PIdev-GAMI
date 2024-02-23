<?php

namespace ContainerXiwDizG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_DotenvDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.dotenv_debug' shared service.
     *
     * @return \Symfony\Component\Dotenv\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dotenv'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.dotenv_debug'] = $instance = new \Symfony\Component\Dotenv\Command\DebugCommand('dev', \dirname(__DIR__, 4));

        $instance->setName('debug:dotenv');
        $instance->setDescription('Lists all dotenv files with variables and values');

        return $instance;
    }
}

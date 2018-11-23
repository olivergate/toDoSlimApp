<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 21/11/2018
 * Time: 14:45
 */

namespace Classes\Factories;


use Psr\Container\ContainerInterface;

class displayTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoFactory = $container->get('todoModel');
        return new \Classes\Controllers\TodoDisplayController($renderer, $todoFactory($container));
    }
}
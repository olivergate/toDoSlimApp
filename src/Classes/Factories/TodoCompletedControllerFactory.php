<?php

namespace Classes\Factories;


use Classes\Controllers\TodoCompletedController;
use Psr\Container\ContainerInterface;

class TodoCompletedControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('todoModel');
        return new TodoCompletedController($todoModel);
    }
}
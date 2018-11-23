<?php

namespace Classes\Factories;


use Psr\Container\ContainerInterface;

class TodoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new \Classes\Models\TodoModel($db);
    }
}
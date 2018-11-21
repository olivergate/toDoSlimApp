<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 21/11/2018
 * Time: 13:23
 */

namespace Classes\Factories;


use Psr\Container\ContainerInterface;

class TodoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('dbConnection');
        return new Classes\Models\TodoModel($db);
    }
}
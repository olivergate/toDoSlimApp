<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};
$container['dbConnection'] = function () {
    $db = new PDO('mysql:host=192.168.20.20;dbname=todo', 'root');
    $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    return $db;
};

$container['displayControllerFactory'] = new \Classes\Factories\displayTodoControllerFactory();
$container['todoModel'] = new \Classes\Factories\TodoModelFactory();
$container['todoCompletedController'] = new \Classes\Factories\TodoCompletedControllerFactory();
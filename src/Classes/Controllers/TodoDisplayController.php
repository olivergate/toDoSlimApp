<?php

namespace Classes\Controllers;

use Classes\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;

class TodoDisplayController
{
    private $renderer;
    private $todoModel;

    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['data'] = $this->todoModel->pullTodoList();
        $this->renderer->render($response, 'displayTodo.phtml', $args);
    }
}
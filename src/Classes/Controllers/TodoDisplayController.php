<?php

namespace Classes\Controllers;

use Classes\Models\TodoModel;
use http\Env\Request;
use http\Env\Response;
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
        $args[] = $this->todoModel->pullTodoList();
        $this->renderer->render($response, 'displayTodo.phtml', $args);
    }
}
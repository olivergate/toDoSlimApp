<?php

namespace Classes\Controllers;

use Classes\Models\TodoModel;
use Slim\Http\Request;
use Slim\Http\Response;

class TodoCompletedController
{
    private $todoModel;

    public function __construct(TodoModel $todoModel)
    {
        $this->todoModel  = $todoModel;
    }

    public function __invoke(Request $request, Response $response)
    {
        $data = [
            "success"=>false,
            "msg"=>"Error in sending",
            "data"=>[NULL]
        ];
        $statusCode = 404;
        $postData = $request->getParsedBody();
        $id = $postData['id'];
        if($this->todoModel->assignCompleted($id) && $id!==NULL) {
            $data = [
                "success"=>true,
                "msg"=>"completed Todo",
                "data"=>[$id]
            ];
            $statusCode = 200;
        }


        return $response->withJson($data, $statusCode);
    }
}
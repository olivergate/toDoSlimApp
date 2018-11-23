<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/slim', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->get('/home', 'displayControllerFactory');

//post
$app->post('/api/complete', 'todoCompletedController');
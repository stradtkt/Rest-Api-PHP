<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $result = $this->course->getCourses();
    return $response->withJson($result, 200, JSON_PRETTY_PRINT);
});

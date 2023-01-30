<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require  'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function (Request $request, Response $response, array $args) {
    
    $response->getBody()->write("Hello");
    return $response;
});

$app->run();
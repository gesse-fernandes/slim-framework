<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
header('Access-Control-Allow-Origin:*'); 
header('Access-Control-Allow-Headers:X-Request-With');

header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
require  'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function (Request $request, Response $response, array $args) {
    include('home.php');
    //$response->getBody()->write("Hello");
    //return $response;
});

$app->get("/clients", function (Request $request, Response $response, array $args) {
    $args[] = [
        'id'=>1,
        'name'=>'Intelsust'
    ];
    return $response->withJson($args,200);
});

$app->run();
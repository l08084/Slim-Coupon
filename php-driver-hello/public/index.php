<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App();
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello!!!, $name");
    return $response;
    //echo 'Hello!!!, ', $name;
});
$app->get('/goodby/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("goodby!!!, $name");
    return $response;
});
$app->get('/coupons/', function (Request $request, Response $response) {
    $data = array('name' => 'Bob', 'age' => 40);
    $response->withHeader('Content-type', 'application/json');
    $response->WithJson($data);
    return $response;
});
$app->run();

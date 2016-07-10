<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App();
$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->getBody()->write("Hello, ".$args['name']);
    return $response;
});
$app->run();

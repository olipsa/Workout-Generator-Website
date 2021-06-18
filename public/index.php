<?php

require_once __DIR__ . '/../vendor/autoload.php';
$app = new core\Application(dirname(__DIR__));
$app->router->get('/', 'homepage');


$app->router->get('/contact', 'contact');


$app->router->get('/EmailConfirmation', 'EmailConfirmation');

$app->router->get('/login', [controllers\AuthController::class,'login']);
$app->router->post('/login', [controllers\AuthController::class,'login']);
$app->router->get('/register', [controllers\AuthController::class,'register']);
$app->router->post('/register', [controllers\AuthController::class,'register']);
$app->run();
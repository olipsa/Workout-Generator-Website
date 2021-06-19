<?php

use models\User;

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'userClass' => User::class
];

$app = new core\Application(dirname(__DIR__), $config);
$app->router->get('/', 'homepage');


$app->router->get('/Workout-Generator', 'Workout-Generator');


$app->router->get('/EmailConfirmation', 'EmailConfirmation');

$app->router->get('/login', [controllers\AuthController::class,'login']);
$app->router->post('/login', [controllers\AuthController::class,'login']);
$app->router->get('/register', [controllers\AuthController::class,'register']);
$app->router->post('/register', [controllers\AuthController::class,'register']);
$app->run();
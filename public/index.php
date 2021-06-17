<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__.'/../controllers/SiteController.php';
$app = new core\Application(dirname(__DIR__));

$app->router->get('/', 'homepage');

$app->router->get('/contact', 'contact');

$app->router->get('/login', 'login');

$app->router->get('/register', [SiteController::class,'register']);
$app->router->post('/register', [SiteController::class,'handleContact']);

$app->run();
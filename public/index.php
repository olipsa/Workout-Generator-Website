<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new core\Application(dirname(__DIR__));

$app->router->get('/', 'homepage');

$app->router->get('/contact', 'contact');

$app->router->get('/login', 'login');

$app->run();
<?php


namespace controllers;


use Application;

class SiteController
{
    public function register(){
        return Application::$app->router->renderView('register');
    }

    public function handleContact(){
        return 'Handling submitted data';
    }


}
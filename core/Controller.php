<?php


namespace core;


class Controller
{
    public string $layout='header';
    public function setLayout($layout){
        $this->layout=$layout;
    }
    public static function render($view,$params=[]){
        return Application::$app->router->renderView($view,$params);
    }

}
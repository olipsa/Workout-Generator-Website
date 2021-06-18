<?php


namespace controllers;

require_once __DIR__ . '/../core/Application.php';
use core\Application;
use core\Controller;
use core\Request;
use core\Router;

class SiteController extends Controller
{
    public function home(){
        $params=[
            'name'=>"SMTH"
        ];
        return Router::renderView('register',$params);
    }
    public static function register(){
        return Controller::render('register');
    }

    public function handleContact(Request $request): string
    {
        $body= $request->getBody();
        var_dump($body);
        return 'Handling submitted data';
    }


}
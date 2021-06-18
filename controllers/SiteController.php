<?php


namespace controllers;

require_once __DIR__ . '/../core/Application.php';
use core\Application;
use core\Controller;
use core\Request;

class SiteController extends Controller
{
    public static function home(){
        $params=[
            'name'=>"SMTH"
        ];
        return renderView('register',$params);
    }
    public static function register(){
        return Controller::render('register');
    }

    public function handleContact(Request $request): string
    {
        $body= $request->getBody();
        var_dump($request);
        var_dump($body);
        return 'Handling submitted data';
    }


}
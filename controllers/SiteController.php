<?php


namespace controllers;

require_once __DIR__ . '/../core/Application.php';
use core\Controller;
use core\Request;

class SiteController extends Controller
{
//    public function home(){
//        $params=[
//            'name'=>"SMTH"
//        ];
//        return Router::renderView('register',$params);
//    }
    public function register(){
        return Controller::render('register');
    }

    public function handleContact(Request $request): string
    {
        $body= $request->getBody();
        return 'Handling submitted data';
    }


}
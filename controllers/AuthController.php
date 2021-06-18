<?php


namespace controllers;
use core\Controller;
use core\Request;
use models\RegisterModel;

class AuthController extends Controller
{
    public function login(){
        $this->setLayout('auth');
        return Controller::render('login');
    }
    public function register(Request $request){
        if($request->isPost()){
            $registerModel = new RegisterModel();
            var_dump($request->getBody());
            return 'Handle submitted data';
        }
        return Controller::render('register');
    }
}
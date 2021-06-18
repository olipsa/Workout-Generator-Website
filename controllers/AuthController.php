<?php


namespace controllers;
use core\Controller;
use core\Request;

class AuthController extends Controller
{
    public function login($request){
        $this->setLayout('auth');
        return Controller::render('login');
    }
    public function register(Request $request){
        if($request->isPost()){
            return 'Handle submitted data';
        }

        else
            return Controller::render('register');
    }
}
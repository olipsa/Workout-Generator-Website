<?php


namespace controllers;
use core\Controller;
use core\Request;

class AuthController extends Controller
{
    public function login(){
        $this->setLayout('auth');
        return Controller::render('login');
    }
    public function register(Request $request){
        if($request->isPost()){
            return 'Handle submitted data';
        }
        return Controller::render('register');
    }
}
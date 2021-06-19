<?php


namespace controllers;
use core\Controller;
use core\Request;
use models\RegisterModel;

class AuthController extends Controller
{
    public function login(){
        $this->setLayout('main');
        return Controller::render('login');
    }
    public function register(Request $request){

        $registerModel = new RegisterModel();
        if($request->isPost()){
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register())
            {
                return 'success';
            }
            return Controller::render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('main');
        return Controller::render('register', [
            'model' => $registerModel
        ]);
    }
}
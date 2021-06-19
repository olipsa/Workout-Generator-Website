<?php


namespace controllers;
use core\Application;
use core\Controller;
use core\Request;
use models\User;

class AuthController extends Controller
{
    public function login(){
        $this->setLayout('main');
        return Controller::render('login');
    }
    public function register(Request $request){

        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());

            if($user->validate() && $user->save())
            {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/EmailConfirmation');
            }
            return Controller::render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('main');
        return Controller::render('register', [
            'model' => $user
        ]);
    }
}
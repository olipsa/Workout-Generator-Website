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
        return render('register',$params);
    }
    public static function register(){
        return Controller::render('register');
    }

    public function handleContact(Request $request){
        $body= $request->getBody();
        echo $body;
        return 'Handling submitted data';
    }


}
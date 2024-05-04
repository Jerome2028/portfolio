<?php

class Router {

    private $request;

    public function __construct($request){
        $request = explode("/", $request);
        $this->request = $request[2];
             // $this->request = $request[4];
    }

    public function getView(){
        
        $view = $this->request;

        switch($view){
            case '':
            case '/':
            case 'home':
                require 'page/home.php';
                break;
                
            case 'about-us':
                require 'page/about-us.php';
                break;

            case 'careers':
                require 'page/careers.php';
                break;

            case 'contact-us':
                require 'page/contact-us.php';
                break;

            case 'warranty':
                require 'page/warranty.php';
                break;

            case 'thank-you':
                require 'page/thank-you.php';
                break;

            default:
                require 'page/404-page.php';
                break;
        }
    }

}
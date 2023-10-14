<?php

class Core{
    
    public function __construct(){
        $this->start();
    }

    public function start(){

        if(isset($_GET['url'])){
            
            $url = $_GET['url'];
            $url = explode('/', $url);
            $controller = $url[0].'Controller';

            array_shift($url);
            if(isset($url[0]) && !empty($url[0])){
                
                $method = $url[0];
            } else {
                
                $method = 'index';
            }
            
        } else{

            $controller = 'homeController';
            $method = 'index';

        }

        $rote = 'controllers/'.$controller.'.php';
        
        if(!file_exists($rote) && !method_exists($controller, $method)){
            $controller = 'homeController';
            $method = 'index';
        }

        $objController = new $controller;
        call_user_func_array(array($objController, $method), []);
        
    }
    
}
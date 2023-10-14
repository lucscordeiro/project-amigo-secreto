<?php

spl_autoload_register(function($file){
    
    if(file_exists('controllers/'.$file.'.php')){
        require 'controllers/'.$file.'.php';

    } elseif(file_exists('core/'.$file.'.php')) {
        require 'core/'.$file.'.php';
    
    } elseif(file_exists('models/'.$file.'.php')) {
        require 'models/'.$file.'.php';
    }
});
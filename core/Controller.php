<?php
class Controller{
    public $dataUsers;

    public function __construct()
    {
        $this->dataUsers = array();    
    }

    public function loadTemplate($nameView, $dataModel = array())
    {
        $this->dataUsers = $dataModel;
        require 'views/template.php';
    }

    public function loadViewInTemplate($nameView, $dataModel = array())
    {
        //[nome][lucas]
        //$nome = 'lucas'
        //extract($dataModel);
        //extract($error);
        require 'views/'.$nameView.'.php';
    }
}
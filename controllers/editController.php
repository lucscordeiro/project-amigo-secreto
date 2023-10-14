<?php

class editController extends Controller{


    public function index(){
        $userId = $_POST['user_id'];

        $usersModel = new usersModel();
        $dataUsers = $usersModel->getUserForId($userId);
        
        $this->loadTemplate('edit', $dataUsers);
    }

    public function editDataUser(){
        $usersModel = new usersModel();

        $userId = $_POST['user_id']; 
        $nameUser = $_POST['name'];
        $emailUser = $_POST['email'];

        try{

            $usersModel->editUser($userId, $nameUser, $emailUser);
            header('Location: http://localhost/mvc/home');

        } catch(Exception $e){

            $error = array('error' => 'Algo deu errado :(');
            $this->loadTemplate('error', $error);
        }
        
    }
    
}
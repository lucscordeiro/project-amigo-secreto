<?php

class registerController extends Controller
{


    public function index()
    {

        $this->loadTemplate('register');
    }

    public function saveAllDataUsers()
    {

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usersModel = new usersModel();

        try {

            $usersModel->addUsers($nome, $email);
            header('Location: http://localhost/project-amigo-secreto/home');
        } catch (Exception $e) {

            $error = array('error' => 'Este e-mail já está cadastrado!');
            $this->loadTemplate('error', $error);
        }
    }
}

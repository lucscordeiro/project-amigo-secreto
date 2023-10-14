<?php

class homeController extends Controller
{


    public function index()
    {

        $usersModel = new usersModel();
        $dataUsers = $usersModel->getDataAllUsers();

        $this->loadTemplate('home', $dataUsers);
    }

    public function deleteUser()
    {

        $usersModel = new usersModel();
        $userId = $_POST['user_id'];

        try {

            $usersModel->deleteUser($userId);
            header('Location: http://localhost/project-amigo-secreto/home');
        } catch (Exception $e) {

            $error = array('error' => 'Algo deu errado :(');
            $this->loadTemplate('error', $error);
        }
    }
}

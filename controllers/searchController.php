<?php
class searchController extends Controller
{

    public function index()
    {

        $usersModel = new usersModel();

        try {

            $search = $_POST['search_user'];
            $searchResult = $usersModel->getUserForSearch($search);

            if ($searchResult) {

                $this->loadTemplate('search', $searchResult);
            } else {

                $error = array('error' => 'Usuário não existe :(');
                $this->loadTemplate('error', $error);
            }
        } catch (Exception $e) {

            $error = array('error' => 'Algo deu errado :(');
            $this->loadTemplate('error', $error);
        }
    }
}

<?php
class sorteioController extends Controller
{
    public function index()
    {
        $usersModel = new usersModel();

        try {

            $users = $usersModel->getDataAllUsers();
            $freeUsers = $users;
            $resultSort = [];

            if ($users) {
                if ((count($users) % 2) == 0) {
                    foreach ($users as $sortUser) {
                        // Garante que uma pessoa não sorteie a si mesma
                        do {

                            $index = array_rand($freeUsers);
                            $selectUser = $freeUsers[$index];
                        } while ($selectUser["user_id"] == $sortUser["user_id"]);

                        $resultSort[$sortUser["nome"]] = $selectUser["nome"];

                        // Remove o amigo sorteado dos livres
                        unset($freeUsers[$index]);
                    }

                    $this->loadTemplate('sorteio', $resultSort);

                } else {

                    $error = array('error' => 'Quantidade de participantes inválida :(');
                    $this->loadTemplate('error', $error);
                }

            } else {

                $error = array('error' => 'Não há participantes registrados :(');
                $this->loadTemplate('error', $error);
            }

        } catch (Exception $e) {

            $error = array('error' => 'Algo deu errado :(');
            $this->loadTemplate('error', $error);
        }
    }
}

<?php
require_once 'Connection.php';

class usersModel
{
    private $conn;

    public function __construct()
    {
        //para acessar classe static
        $this->conn = Connection::initConnection();
    }

    public function getDataAllUsers()
    {

        $data = array();

        $stmt = $this->conn->prepare('SELECT user_id, nome, email FROM users');
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getUserForId($userId)
    {

        $data = array();

        $stmt = $this->conn->prepare('SELECT user_id, nome, email FROM users WHERE user_id = :user_id');
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getUserForSearch($search)
    {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE nome LIKE ? OR email LIKE ?");
        $stmt->execute(array('%' . $search . '%', '%' . $search . '%'));

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUsers($nameUser, $emailUser)
    {

        $stmt = $this->conn->prepare("INSERT INTO users (nome, email) VALUES (:nome, :email)");
        $stmt->bindParam(':nome', $nameUser);
        $stmt->bindParam(':email', $emailUser);
        $stmt->execute();

    }

    public function deleteUser($userId)
    {

        $stmt = $this->conn->prepare("DELETE FROM users WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        return $stmt->execute();
        
    }

    public function editUser($userId, $nameUser, $emailUser)
    {

        $stmt = $this->conn->prepare("UPDATE users SET nome = :nameUser, email = :emailUser WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':nameUser', $nameUser);
        $stmt->bindParam(':emailUser', $emailUser);
        return $stmt->execute();
        
    }
}

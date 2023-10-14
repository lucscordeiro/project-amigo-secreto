<?php
class Connection
{

    private static $connectDb;
    private function __construct(){}

    public static function initConnection(){

        if (!isset(self::$connectDb)) {
            
            $dbname = 'meu_amigo_secreto';
            $host = 'localhost';
            $user = 'root';
            $password = '';

            try {
                self::$connectDb = new PDO('mysql:dbname=' . $dbname . ';host=' . $host, $user, $password);
            } catch (Exception $e) {
                echo 'Erro: ' . $e;
            }
        }

        return self::$connectDb;
    }
}

/*class Connection{
    public function initConnection(){
        $dbname = 'users';
        $host = 'localhost';
        $user = 'root';
        $password = '';

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }
    
}*/

<?php
class Conexao
{

    private $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    private $user = 'root';
    private $password = '';


    public function conectar()
    {
        try {
            $conexao = new PDO("$this->$dsn", "$this->$user", "$this->$password");
            return $conexao;
        } catch (PDOException $e) {
            echo  "Error: " . $e->getMessage();
        }
    }
}

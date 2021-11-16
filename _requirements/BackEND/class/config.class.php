<?php 
/////////////////CONNECTION TO THE DATABASE

class config{
    private $user = 'root';
    private $password = '';
    public $pdo = null;//why null?

    public function con(){
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=todolist', $this->user,$this->password);//connection string
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }
}
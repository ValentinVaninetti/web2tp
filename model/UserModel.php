<?php
require_once "../utils/DataBase.php";

class UserModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }
    
    public function getUsers(){
        $statement = $this->db->prepare("SELECT * FROM users");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function addNewUser($username,$email,$password){
        $sql = "INSERT INTO users(username,email,pass) VALUES(?,?,?)";
        $statement = $this->db->prepare($sql);
        $statement->execute(
            array($username, $email, $password)
        );
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

     
    
}

<?php
include_once "../utils/DataBase.php";

class UserModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }
    
    public function getUsers(){
        $statement = $this->db->prepare("SELECT * from users");
        $statement->execute();
        return $statement->fetchALL(PDO::FETCH_OBJ);
    }
}

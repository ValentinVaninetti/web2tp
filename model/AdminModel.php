<?php

require_once "../utils/DataBase.php";

class AdminModel{

    private $db;

    public function __construct()
    {
        $this->db = DataBase::getDataBase();
    }
    public function getAdminProducts(){
        $statement = $this->db->prepare("SELECT * FROM products");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
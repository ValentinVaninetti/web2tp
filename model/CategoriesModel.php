<?php

require_once "../utils/DataBase.php";

class CategoriesModel{
    
    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    public function getCategories(){
        $statement = $this->db->prepare("SELECT * FROM category");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
<?php
require_once "../utils/DataBase.php";


class ProductsModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    public function getProducts(){
        $statement = $this->db->prepare("SELECT * FROM products");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
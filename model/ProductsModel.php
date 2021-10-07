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

    public function getFilteredProducts($filter_id){
        $statement = $this->db->prepare("SELECT * FROM products,category WHERE products.category_id = :filter_id");
        $statement->execute(array($filter_id));
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

  
}

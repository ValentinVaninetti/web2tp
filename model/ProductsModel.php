<?php

require_once "../utils/DataBase.php";


class ProductsModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    public function getProducts(){
        $statement = $this->db->prepare("SELECT * FROM products"); //selecciona todo de la tabla productos
        $statement->execute(); // ejecuta lo que le dije que se prepare
        return $statement->fetchAll(PDO::FETCH_OBJ); // retorna lo que ejecuto en el $statement
    }

    public function getFilteredProducts($filter_id = null){   
             
        $statement = $this->db->prepare("SELECT * FROM products WHERE category_id = ?");
        $statement->execute(array($filter_id));
        return $statement->fetchAll(PDO::FETCH_OBJ);
       
    }

  
}

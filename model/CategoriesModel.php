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
    public function addCategory($category_name,$description)
    {
        $statement = $this->db->prepare("INSERT INTO category ( category_name, description) VALUES (?,?)");
        $statement->execute(
            array($category_name ,$description)
        );
    }

    public function deleteCategory($category_id)
    {
        $statement = $this->db->prepare("DELETE FROM category WHERE category_id = ?");
        $statement->execute(
            array($category_id)
        );
    }

    public function editCategory($category_name, $category_description, $category_id){
        $statement = $this->db->prepare("UPDATE category SET category_name=?, description=? WHERE category_id = ?");
        $statement->execute(array($category_name, $category_description, $category_id));
    }
}
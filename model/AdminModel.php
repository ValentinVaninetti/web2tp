<?php

require_once "../utils/DataBase.php";

class AdminModel{

    private $db;

    public function __construct()
    {
        $this->db = DataBase::getDataBase();
    }
    public function getAdminProducts()
    {
        $statement = $this->db->prepare("SELECT * FROM products");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function addProduct($product_name,$category_id,$product_price, $product_img, $product_description)
    {
        $statement = $this->db->prepare("INSERT INTO products(product_name,category_id,product_price,product_img, product_description) VALUES (?,?,?,?,?)");
        $statement->execute(
            array($product_name, $category_id, $product_price, $product_img, $product_description)
        );
    }  

    public function deleteProduct($products_id)
    {
        $statement = $this->db->prepare("DELETE FROM products WHERE products_id = ?");
        $statement->execute(
            array($products_id)
        );
    }

    public function editProduct($products_id ,$product_name, $category_id,$product_price, $imgUrl, $product_description)
    {      

        $statement = $this->db->prepare("UPDATE products SET product_name=?, category_id=?, product_price=?, product_img=?, product_description WHERE products_id=?");
        $statement->execute(
            array($product_name, $category_id,$product_price, $imgUrl, $product_description,$products_id)
        );   
        
    }
       
    public function addCategory($category_name,$description)
    {
       $statement = $this->db->prepare("INSERT INTO category ( category_name, description) VALUES (?,?)");
        $statement->execute(
            array( $category_name ,$description)
        );
    }

    public function deleteCategory($category_id)
    {
        $statement = $this->db->prepare("DELETE FROM category WHERE category_id = ?");
        $statement->execute(
            array($category_id)
        );
    }
}
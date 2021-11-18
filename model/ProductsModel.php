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

    public function getProductById($id){
        $statement = $this->db->prepare("SELECT * FROM products WHERE product_id = ?"); 
        $statement->execute(array($id)); 
        return $statement->fetchAll(PDO::FETCH_OBJ); 
    }

    public function getFilteredProducts($filter_id = null){   
             
        $statement = $this->db->prepare("SELECT * FROM products WHERE category_id = ?");
        $statement->execute(array($filter_id));
        return $statement->fetchAll(PDO::FETCH_OBJ);
       
    }
    
    public function addProduct($product_name,$category_id,$product_price, $product_img, $product_description)
    {
        $statement = $this->db->prepare("INSERT INTO products(product_name,category_id,product_price,product_img, product_description) VALUES (?,?,?,?,?)");
        $statement->execute(
            array($product_name, $category_id, $product_price, $product_img, $product_description)
        );
    }  

    public function deleteProduct($product_id)
    {
        $statement = $this->db->prepare("DELETE FROM products WHERE product_id = ?");
        $statement->execute(
            array($product_id)
        );
    }
    public function editProduct($productName, $categoryid,$productPrice, $imgUrl, $productDescription, $productid)
    {          
       $statement = $this->db->prepare("UPDATE products SET product_name=?, category_id=?, product_price=?, product_img=?,product_description=? WHERE product_id = ?");
       $statement->execute(
           array($productName, $categoryid,$productPrice, $imgUrl, $productDescription, $productid)); 
    }
    

  
}

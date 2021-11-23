<?php

require_once "../utils/DataBase.php";
class CommentsModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    public function getProductComments($product_id){  
       //var_dump($product_id);
        /*$statement = $this->db->prepare("SELECT * FROM comments 
        LEFT JOIN users ON users.id_user = comments.id_user 
        WHERE product_id=? ORDER BY $order $criteria");*/
        //$statement = $this->db->prepare("SELECT * FROM comments LEFT JOIN users ON users.id_user = comments.id_user WHERE product_id =?");
        $statement = $this->db->prepare("SELECT * FROM comments WHERE product_id = ?");
        $statement->execute($product_id);
        echo $statement->fetchAll(PDO::FETCH_OBJ);
        die();
        return $statement->fetchAll(PDO::FETCH_OBJ);
        
       
    }    

    function addComentario($comment, $id_user, $rating, $product_id, $date){
        $statement = $this->db->prepare("INSERT INTO comments (comment, id_user, rating, product_id, date) VALUES (?,?,?,?,?)");
        $statement->execute(array($comment, $id_user, $rating, $product_id, $date));
    }
    function deleteComment($comment_id){
        $statement = $this->db->prepare("DELETE FROM comments WHERE comment_id = ?");
        $statement->execute(array($comment_id));
    }      
    
    
}
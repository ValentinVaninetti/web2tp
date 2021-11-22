<?php

require_once "../utils/DataBase.php";
class CommentsModel{

    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    function getProductComments($product_id){
        $statement = $this->db->prepare("SELECT * FROM comments WHERE product_id = ?");
        $statement->execute(array($product_id));
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    function addComentario($comment, $id_user, $rating, $product_id){
        $statement = $this->db->prepare("INSERT INTO comments (comment, id_user, rating, product_id) VALUES (?,?,?,?)");
        $statement->execute(array($comment, $id_user, $rating, $product_id));
    }
    function deleteComment($comment_id){
        $statement = $this->db->prepare("DELETE FROM comments WHERE comment_id = ?");
        $statement->execute(array($comment_id));
    }      
    
    
}
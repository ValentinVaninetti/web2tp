<?php


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

    function addComentario(){
        
    }
    
}
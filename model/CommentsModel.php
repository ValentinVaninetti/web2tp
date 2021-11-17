<?php


class CommentsModel{


    private $db;

    public function __construct(){

        $this->db = DataBase::getDataBase();
    }

    function getComentarios($product_id){
        $statement = $this->db->prepare("SELECT * FROM comments WHERE product_id = ?");
    }

    function addComentario(){
        
    }
    
}
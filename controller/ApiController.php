<?php
require_once "../model/CommentsModel.php";

class ApiController{

    private $commentsModel;

    public function __construct()
    {
        $this->commentsModel = new CommentsModel();
    }

    public function getComments(){
        $comments = $this->commentsModel->getComentarios();
        
    }
}
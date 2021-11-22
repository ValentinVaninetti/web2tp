<?php

require_once "../model/CommentsModel.php";

require_once "../api/ApiController.php";

class CommentApiController extends ApiController{   

    public function __construct()
    {
        parent::  __construct();        
        $this->commentsModel = new CommentsModel();
        $this->commentsView = new CommentsApiView();
        
    }

    public function getProductComments($params = null){
        
        $comments = $this->commentsModel->getProductComments($params[":ID"]);
        if(!empty($comments)){
            $this->commentsView->response($comments, 200);
        }else{
            $this->commentsView->response("e", 404);
        }
    }

    public function addComment($params = null){
        $comment = $this->getData();        
        $this->commentsModel->addComentario($comment->comment, $comment->user_id, $comment->rating, $comment->product_id);
        $this->commentsView->response($comment, 200);
    }

    function deleteComment($params = null){ 
        
        $this->commentsModel->deleteComment($params[':ID']);
        $this->commentsView->response("", 200);
        
    }
    
    
}
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


    public function showComments($params){
        $product_id = $params[":ID"];
        $comments = $this->commentsModel->getProductComments($product_id);
        var_dump($comments);
        $this->commentsView->response($comments,200);
    }

    /*public function showProductComments($params = null){
        
        if(isset($_GET['order']) && isset($_GET['sort'])){
            $order = $_GET['order'];
            $criteria = $_GET['sort'];
            
        }
        else{
            $order = 'comment_id';
            $criteria = 'ASC';     
            
        }          
        $comments = $this->commentsModel->getProductComments($params[":ID"]);
        if(!empty($comments)){
            $this->commentsView->response($comments, 200);
        }else{
            $this->commentsView->response("e", 404);
        }
    }*/
   

    public function addComment($params = null){
        $comment = $this->getData();
        $date = date("Y-m-d H:i:s");        
        if(isset($comment->comment)&&!empty($comment->comment)){
            $this->commentsModel->addComentario($comment->comment, $comment->user_id, $comment->rating, $comment->product_id, $date);
            $this->commentsView->response($comment, 200);
        }
        else{
            $this->commentsView->response("error", 404);
        }
    }

    function deleteComment($params = null){ 
        
        $this->commentsModel->deleteComment($params[':ID']);
        $this->commentsView->response("", 200);
        
    }
    
    
}
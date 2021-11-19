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
            $this->commentsView->response("No comments found", 404);
        }
    }
}
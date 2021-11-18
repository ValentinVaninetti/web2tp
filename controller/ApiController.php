<?php
require_once "../model/CommentsModel.php";
require_once "../view/CommentsApiView.php";
class ApiController{

    private $commentsModel;
    private $commentsView;

    public function __construct()
    {
        $this->commentsModel = new CommentsModel();
        $this->commentsView = new CommentsApiView();
    }

    public function getProductComments($params = []){
        $comments = $this->commentsModel->getProductComments($params[":ID"]);
        if(!empty($comments)){
            $this->commentsView->response($comments, 200);
        }else{
            $this->commentsView->response("No comments found", 404);
        }
    }
}
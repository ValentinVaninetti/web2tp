<?php

require_once "../view/UserView.php";
require_once "../model/UserModel.php";

class UserController{

    private $userModel;
    private $userView;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new UserView();
    }

    public function getAllUsers(){
       $users = $this->userModel->getUsers();       
       $this->userView->showUsers($users);
    }

    

}

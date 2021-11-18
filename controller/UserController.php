<?php

require_once "../model/UserModel.php";
require_once "../view/AdminView.php";


class UserController{

    private $userModel;    
    private $adminView;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->loginView = new LoginView();
        $this->adminView = new AdminView();
    }
    public function getAllUsers(){
        return $this->userModel->getUsers();     

       
     }
    
    

    

    

}

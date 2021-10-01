<?php

require_once "../model/LoginModel.php";
require_once "../view/LoginView.php";
require_once "../model/UserModel.php";

class LoginController{

    private $loginModel;
    private $loginView;
    private $userModel;
    

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->loginView = new LoginView();
        $this->userModel = new UserModel();
    }

    public function getLogin()
    {  
        $this->loginView->showSignup();
    }

    public function newUser(){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->addNewUser($username,$email,$password);
    }

}
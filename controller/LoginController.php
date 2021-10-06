<?php

require_once "../view/HomeView.php";
require_once "../view/LoginView.php";
require_once "../model/UserModel.php";
require_once "../controller/UserController.php";

class LoginController{

    private $loginView;   
    private $userModel;   
    private $homeView;
    

    public function __construct()    {
       
        $this->loginView = new LoginView();
        $this->userModel = new UserModel();        
        $this->homeView = new HomeView();
        
    }
   
    public function getLogin()
    {
        $this->loginView->showLogin(null);
    }

    public function getSignup()
    {  
        $this->loginView->showSignup();
    }

    public function newUser(){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->addNewUser($username,$email,$password);
        
    }

    public function checkLogin(){
        $allUsers = [];
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPwd'];  

        $allUsers = $this->userModel->getUsers(); 
        $logged = false;
        $i = 0;

        while ($logged == false) {
        
            if(($allUsers[$i]->email=== $userEmail)&&($allUsers[$i]->pass === $userPass)) {
                $logged = true;
            }
            else{
                $i++;
             }   
        }
        if ($logged == true) {
            $this->homeView->showHome($allUsers[$i]);
        }   
        else {
            $this->loginView->showLogin("Error: Wrong email or password");
        }
       
    }
    
}
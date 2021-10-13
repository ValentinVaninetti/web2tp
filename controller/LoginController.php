<?php

require_once "../view/AdminView.php";
require_once "../view/HomeView.php";
require_once "../view/LoginView.php";
require_once "../model/UserModel.php";
require_once "../controller/UserController.php";

class LoginController{

    private $loginView;   
    private $userModel;   
    private $homeView;
    private $adminView;
    

    public function __construct()    {
       
        $this->loginView = new LoginView();
        $this->userModel = new UserModel();        
        $this->homeView = new HomeView();
        $this->adminView = new AdminView();
        
    }
   
    public function getLogin()
    {
        $this->loginView->showLogin();
    }

    public function getSignup()
    {  
        $this->loginView->showSignup();
    }

    public function newUser(){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $isAdmin = 0;
        $this->userModel->addNewUser($username,$email,$password,$isAdmin);
        
    }

    public function checkLogin($email){
               
        $user = $this->userModel->getUserByEmail($email);
        if ((isset( $_POST['userEmail'])) && (isset($_POST['userPwd'])))    
        {
            $email = $_POST['userEmail'];
            $pass = $_POST['userPwd'];
            if (password_verify($pass,($user->pass))){
                $this->homeView->showHome();
            }
            
        }
    }
    
}
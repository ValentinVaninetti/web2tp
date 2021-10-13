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
        $password = $_POST['password'];
        $this->userModel->addNewUser($username,$email,$password);
        
    }

    public function checkLogin(){
        $allUsers = [];
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPwd'];  

        $allUsers = $this->userModel->getUsers(); 
        session_start();
        $_SESSION['logged'] = false;
        $i = 0;

        while(($_SESSION['logged'] == false)&&($i <= count($allUsers))){    

            if(($allUsers[$i]->email == $userEmail)&&($allUsers[$i]->pass == $userPass)) {   
                if($allUsers[$i]->isAdmin == 1){
                    $_SESSION['isAdmin'] = true;
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $userEmail;
                }
            }
            else{
                $i++;
             }   
        }
        if(($_SESSION['logged'] == true)&&($_SESSION['isAdmin'] == true)) {
            
                $this->adminView->showAdminUsers(null);            
            
           
        } 
        else if ($_SESSION['logged'] == true){
            $this->homeView->showHome();
            }
         
        else {
            $this->loginView->showLogin("Error: Wrong email or password");
        }
       
    }
    public function logout(){
        session_start();
        session_destroy();
        $this->loginView->showLogin();
    }
    
}
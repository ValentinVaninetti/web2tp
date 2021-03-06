<?php

require_once "../view/AdminView.php";
require_once "../view/HomeView.php";
require_once "../view/LoginView.php";
require_once "../model/UserModel.php";
require_once "../controller/UserController.php";
require_once "../helper/AuthHelper.php";

class LoginController{

    private $loginView;   
    private $userModel;   
    private $homeView;
    private $authHelper;
    private $adminView;
    

    public function __construct()    {
       
        $this->loginView = new LoginView();
        $this->userModel = new UserModel();        
        $this->homeView = new HomeView();
        $this->adminView = new AdminView();       
        $this->authHelper = new AuthHelper();    
        
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
        if(!empty($username) && !empty($email) && !empty($password)){
            $this->userModel->addNewUser($username,$email,$password,$isAdmin);
            session_start();
                $_SESSION['islogged'] = true;
                $_SESSION['email'] = $email;                
                    $this->homeView->showHome();           
        }else{
            $this->loginView->showSignup();
        }
       
        
    }

    public function checkLogin(){              
        
        if ((isset( $_POST['userEmail'])) && (isset($_POST['userPwd'])))    
        {
            $email = $_POST['userEmail'];
            $pass = $_POST['userPwd'];

            $user = $this->userModel->getUserByEmail($email);

            if ($user && password_verify($pass,($user->pass))){
                if($user->isAdmin == 1){ //admin email: admin@admin.com, admin password: admin//
                    session_start();
                    $_SESSION['islogged'] = true;
                    $_SESSION['isAdmin'] = true;
                    $_SESSION['id'] = $user->id_user;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['email'] = $email;                    
                    $this->homeView->showHome();
                    
                }else{
                session_start();
                $_SESSION['islogged'] = true;
                $_SESSION['id'] = $user->id_user;
                $_SESSION['username'] = $user->username;
                $_SESSION['email'] = $email;                
                $this->homeView->showHome();
                }
                
                
            }else{
                $this->loginView->showLogin();
            }
            
        }
    }
    public function logout(){
        $this->authHelper->logout();
        $this->homeView->showHomeLocation();
    }
    
}
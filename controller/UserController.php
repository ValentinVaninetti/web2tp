<?php

require_once "../model/UserModel.php";
require_once "../view/AdminView.php";
require_once "../view/HomeView.php";


class UserController{

    private $userModel;    
    private $adminView;
    private $homeView;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->loginView = new LoginView();
        $this->adminView = new AdminView();
        $this->homeView = new HomeView();
        $this->authHelper = new AuthHelper();
    }
    public function getAllUsers(){
        return $this->userModel->getUsers();     

       
     }
     public function getHome(){
        $this->homeView->showHome(null);
    }
    
    public function getAdminUsers()
    {
        $adminUsers = $this->getAllUsers();
        $this->adminView->showAdminUsers($adminUsers);
    } 
    

  
    function adminGivesPrivileges(){
       
        $userid = $_POST['userid'];
        $admin = $_POST['adminEdit'];            
        $this->userModel->convertToAdmin($userid, $admin);            
        $this->adminView->showUserLocation();         
   
      
    }

    function adminDeletesUsers(){
        $userid = $_POST['user_id'];
        $isAdmin = $_POST['isAdmin'];
        if($isAdmin == 0){
            $this->userModel->deleteUser($userid);
            $this->adminView->showUserLocation();  
        }else{
            $this->adminView->showUserLocation();
        }
    }
    
    

}

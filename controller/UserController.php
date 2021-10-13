<?php

require_once "../model/UserModel.php";


class UserController{

    private $userModel;    
    

    public function __construct(){
        $this->userModel = new UserModel();
        
    }
    public function getAllUsers(){
        return $this->userModel->getUsers();       
       
     }
    

    

    

}

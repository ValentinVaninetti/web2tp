<?php
require_once "../libs/Smarty.class.php";

class LoginView{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showLogin($errorCode = ""){
        
        $this->smarty->assign('error_code',$errorCode);       
        $this->smarty->display('../templates/login.tpl');
    }
    
    public function showSignup(){
        
        $this->smarty->display('../templates/signup.tpl');
    }

   

}
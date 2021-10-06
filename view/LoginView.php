<?php
require_once "../libs/Smarty.class.php";

class LoginView{

    public function showLogin($errorCode){
        $smarty = new Smarty();
        $smarty->assign('error_code',$errorCode);
       
        $smarty->display('../templates/login.tpl');
    }
    
    public function showSignup(){
        $smarty = new Smarty();
        $smarty->display('../templates/signup.tpl');
    }

}
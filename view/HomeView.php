<?php

class HomeView{

    public function __construct()
    {
        
    }

    public function showHome($user = null, $logged = null){
        $smarty = new Smarty(); 
        $smarty->assign('user', $user);
        $smarty->assign('isLogged',$logged);              
        $smarty->display('../templates/home.tpl');
    }

    public function showHomeLocation(){
        header("Location: home");
    }
}
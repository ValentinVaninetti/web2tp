<?php

class HomeView{

    public function __construct()
    {
        
    }

    public function showHome($user){
        $smarty = new Smarty();
        $smarty->assign('currentUser', $user);        
        $smarty->display('../templates/home.tpl');
    }
}
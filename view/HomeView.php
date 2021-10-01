<?php

class HomeView{

    public function __construct()
    {
        
    }

    public function showHome(){
        $smarty = new Smarty();
        $smarty->display('../templates/home.tpl');
    }
}
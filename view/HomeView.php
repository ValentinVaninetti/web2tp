<?php
require_once "../libs/Smarty.class.php";
class HomeView{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    public function showHome(){
        if (session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }   
                    
        $this->smarty->display('../templates/home.tpl');
    }

    public function showHomeLocation(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        header("Location: home");
    }
}
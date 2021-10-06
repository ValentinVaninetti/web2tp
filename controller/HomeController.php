<?php

require_once "../view/HomeView.php";

class HomeController{

    private $homeview;

    public function __construct()
    {
        $this->homeview = new HomeView();
    }

    public function getHome(){
        $this->homeview->showHome(null);
    }
    
}
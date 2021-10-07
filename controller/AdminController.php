<?php

require_once "../model/AdminModel.php";
require_once "../view/AdminView.php";

class AdminController{

    private $adminModel;
    private $adminView;
    
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->adminView = new AdminView();
    }

    public function getAllAdminProducts(){
        $condicion = false;
        session_start();
        if(isset($_SESSION['isAdmin'])){
            $condicion = $_SESSION['isAdmin'];
        }
        $adminProducts = $this->adminModel->getAdminProducts();
        $this->adminView->showAdminProducts($adminProducts,$condicion);
    }
}
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
        $adminProducts = $this->adminModel->getAdminProducts();
        $this->adminView->showAdminProducts($adminProducts);
    }
}
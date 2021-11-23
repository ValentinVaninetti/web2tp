<?php

require_once "../model/CategoriesModel.php";
require_once "../view/CategoriesView.php";
require_once "../view/AdminView.php";

class CategoriesController{
    
    private $categoriesModel;
    private $categoriesView;
    private $adminView;

    public function __construct()
    {
        $this->categoriesModel = new CategoriesModel();
        $this->categoriesView = new CategoriesView();
        $this->adminView = new AdminView();
    }
    
    public function getAllCategories()
    {
        return  $this->categoriesModel->getCategories();        
    }

    
}
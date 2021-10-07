<?php

require_once "../model/CategoriesModel.php";
require_once "../view/CategoriesView.php";

class CategoriesController{
    
    private $categoriesModel;
    private $categoriesView;

    public function __construct()
    {
        $this->categoriesModel = new CategoriesModel();
        $this->categoriesView = new CategoriesView();
    }
    
    public function getAllCategories()
    {
        return  $this->categoriesModel->getCategories();        
    }

    public function getCategoriesForAdmin()
    {
        $categories = $this->getAllCategories();
        $this->categoriesView->showCategories($categories);
    }
}
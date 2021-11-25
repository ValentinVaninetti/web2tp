<?php

require_once "../model/CategoriesModel.php";
require_once "../view/CategoriesView.php";
require_once "../view/AdminView.php";
require_once "../helper/AuthHelper.php";

class CategoriesController{
    
    private $categoriesModel;
    private $categoriesView;
    private $adminView;
    private $authHelper;

    public function __construct()
    {
        $this->categoriesModel = new CategoriesModel();
        $this->categoriesView = new CategoriesView();
        $this->adminView = new AdminView();
        $this->authHelper = new AuthHelper();
    }
    
    public function getAllCategories()
    {
        return  $this->categoriesModel->getCategories();        
    }

    public function getAdminCategories()
    {
        $adminCategories = $this->getAllCategories();
        $this->adminView->showAdminCategories($adminCategories);
    }
    public function adminAddCategories()
    {
        $this->authHelper->checkLoggedIn();
        $category_name = $_POST['category-name'];
        $description = $_POST['category-description'];
        if((!empty($category_name))&&(!empty($description))){
            $this->categoriesModel->addCategory($category_name,$description);
            $this->getAdminCategories();
        } else {
            $this->getAdminCategories();
        } 

    }

    public function adminDeletesCategories()
    {
        $this->authHelper->checkLoggedIn();
        $category_id = $_POST['category-id'];
        $this->categoriesModel->deleteCategory($category_id);        
        $this->getAdminCategories();        
    }

    public function adminEditCategories()
    {        
        $this->authHelper->checkLoggedIn();        
        $category_name = $_POST['category_name'];
        $category_description = $_POST['category_description'];
        $category_id = $_POST['category-id'];
        if((!empty($category_name))&&(!empty($category_description))){            
            $this->categoriesModel->editCategory($category_name, $category_description,$category_id);
            $this->getAdminCategories();
        } else {
            $this->getAdminCategories();
        }
       
    }
    
}
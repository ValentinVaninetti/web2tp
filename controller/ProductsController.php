<?php

require_once "../model/ProductsModel.php"; //traemos el productsModel que acabamos de hacer
require_once "../view/ProductsView.php";
require_once "../controller/CategoriesController.php";


class ProductsController{

    private $productsModel;
    private $productsView;    
    private $categoriesController;

    public function __construct()
    {
        $this->productsModel = new ProductsModel();
        $this->productsView = new ProductsView();       
        $this->categoriesController = new CategoriesController();
    }
    
    public function getAllProducts()
    {        
        $products = $this->productsModel->getProducts();
        $categories = $this->categoriesController->getAllCategories();
        $this->productsView->showProducts($products, $categories);
    }

    public function getFilteredProducts()
    {
        if(isset($_POST['category'])){
            $filter = $_POST['category'];
            $products = $this->productsModel->getFilteredProducts($filter);
            $categories = $this->categoriesController->getAllCategories();
            $this->productsView->showProducts($products,$categories);
        }
        
    } 

    
}
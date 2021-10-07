<?php

require_once "../model/ProductsModel.php";
require_once "../view/ProductsView.php";


class ProductsController{

    private $productsModel;
    private $productsView;

    public function __construct()
    {
        $this->productsModel = new ProductsModel();
        $this->productsView = new ProductsView();

    }
    
    public function getAllProducts(){
        
        $products = $this->productsModel->getProducts();
        $categories = $this->productsModel->getCategories();
        $this->productsView->showProducts($products, $categories);
    }

   

    
}
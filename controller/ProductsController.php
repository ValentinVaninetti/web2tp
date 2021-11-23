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
        
        if(isset($_POST['category-id'])&&(!empty($_POST['category-id']))){

            $filter = $_POST['category-id'];            
            $products = $this->productsModel->getFilteredProducts($filter);
            $categories = $this->categoriesController->getAllCategories();
            $this->productsView->showProducts($products,$categories);
            
        }else{
            $this->getAllProducts();
        }
        
    } 

    public function getListBySearch(){
        if (isset($_POST['special']) && $_POST['special'] != "") {
            $special = $_POST['special'];
        } else {
            $special = null;
        }
        var_dump($special);
        $data = $this->productsModel->getSpecialSearch($special);
        $categories = $this->categoriesController->getAllCategories();
        $this->productsView->showProducts($data,$categories);
    }

    public function getProductById(){        
        $id = $_POST['product_id'];           
        $product = $this->productsModel->getProductById($id);           
        
        $this->productsView->showDetailedProduct($product);
        
    }

    
}
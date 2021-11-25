<?php

require_once "../model/ProductsModel.php"; //traemos el productsModel que acabamos de hacer
require_once "../view/ProductsView.php";
require_once "../controller/CategoriesController.php";
require_once "../view/AdminView.php";
require_once "../helper/AuthHelper.php";


class ProductsController{

    private $productsModel;
    private $productsView;    
    private $categoriesController;
    private $adminView;
    private $authHelper;

    public function __construct()
    {
        $this->productsModel = new ProductsModel();
        $this->productsView = new ProductsView();       
        $this->categoriesController = new CategoriesController();
        $this->adminView = new AdminView();  
        $this->authHelper = new AuthHelper();
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
        $data = $this->productsModel->getSpecialSearch($special);
        $categories = $this->categoriesController->getAllCategories();
        $this->productsView->showProducts($data,$categories);
    }

    public function getProductById(){        
        $id = $_POST['product_id'];           
        $product = $this->productsModel->getProductById($id);           
        
        $this->productsView->showDetailedProduct($product);
        
    }
    
    public function getAllAdminProducts()
    {            
        $this->authHelper->checkLoggedIn();
        if(isset($_SESSION['isAdmin'])){
        $adminProducts = $this->productsModel->getProducts();
        $categories = $this->categoriesController->getAllCategories();
        
        $this->adminView->showAdminProducts($adminProducts, $categories);  
        } 
        
            
    }    

    public function adminAddProducts()
    {
        $this->authHelper->checkLoggedIn();
        $product_name = $_POST['productName'];
        $category_id = $_POST['category'];
        $product_price = $_POST['productPrice'];        
        $product_description = $_POST['productDescription'];

        if((!empty($product_name))&&(!empty($category_id))&&(!empty($product_price))&&(!empty($_FILES['productImage']))&&(!empty($product_description))){
            if ($_FILES['productImage']['type'] == "image/jpg" 
            || $_FILES['productImage']['type'] == "image/jpeg"
            || $_FILES['productImage']['type'] == "image/png") {
            $this->productsModel->addProduct($product_name, $category_id, $product_price, $_FILES['productImage'], $product_description);            
            $this->getAllAdminProducts();
            }
            else{
                $this->productsModel->addProduct($product_name, $category_id, $product_price, $product_description);
                $this->getAllAdminProducts();
            }
        }else{
            $this->getAllAdminProducts();
        }        
    }

    public function adminDeletesProducts()
    {
        $this->authHelper->checkLoggedIn();
        $product_id = $_POST['productid'];

        if(!empty($product_id)){
            $this->productsModel->deleteProduct($product_id);
            $this->getAllAdminProducts();
        }else{
            $this->getAllAdminProducts();
        }

    }

    public function adminEditProducts()
    {
        $this->authHelper->checkLoggedIn();
        $categories = $this->categoriesController->getAllCategories();
        $product_id= $_POST['productidEdit'];
        $product_name = $_POST['productNameEdit'];
        $category_id= $_POST['categoryEdit'];
        $product_price = $_POST['productPriceEdit'];        
        $product_description = $_POST['productDescriptionEdit'];

        /*if((!empty($product_id))&&(!empty($product_name))&&(!empty($category_id))&&(!empty($product_price))&&(!empty($_FILES['productImage']))&&(!empty($product_description))){
            if ($_FILES['productImage']['type'] == "image/jpg" 
            || $_FILES['productImage']['type'] == "image/jpeg"
            || $_FILES['productImage']['type'] == "image/png") {*/
            $this->productsModel->editProduct($product_name, $category_id, $product_price, $_FILES['productEditImage'], $product_description, $product_id);            
            $this->getAllAdminProducts();
            /*}
          }else{
            $this->getAllAdminProducts();
          }*/
               
    }


    
}
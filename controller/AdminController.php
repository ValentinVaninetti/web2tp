
<?php

require_once "../model/AdminModel.php";
require_once "../view/AdminView.php";
require_once "../controller/CategoriesController.php";
require_once "../controller/UserController.php";

class AdminController{

    private $adminModel;
    private $adminView;
    private $categoriesController;
    private $userController;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->adminView = new AdminView();  
        $this->categoriesController = new CategoriesController();    
        $this->userController = new UserController(); 
    }

    public function getAdminUsers(){
        $adminUsers = $this->userController->getAllUsers();
        $this->adminView->showAdminUsers($adminUsers);
    } 
    
    public function getAdminCategories(){
        $adminCategories = $this->categoriesController->getAllCategories();
        $this->adminView->showAdminCategories($adminCategories);
    }

    public function adminAddCategories(){
        
    }

    public function getAllAdminProducts(){
        $condicion = false;
        session_start();
        if(isset($_SESSION['isAdmin'])){
            $condicion = $_SESSION['isAdmin'];
        }
        $adminProducts = $this->adminModel->getAdminProducts();
        $categories = $this->categoriesController->getAllCategories();
        $this->adminView->showAdminProducts($adminProducts,$condicion, $categories);
        
       
    }    

    public function AdminAddProducts()
    {
        $product_name = $_POST['productName'];
        $category_id = $_POST['category'];
        $product_price = $_POST['productPrice'];
        $product_img = $_POST['imgUrl'];
        $product_description = $_POST['productDescription'];

        if(!empty($product_name)||!empty($product_price)||empty($products_description)){
            $this->adminModel->addProduct($product_name, $category_id, $product_price,$product_img, $product_description);

        }else{
            $this->adminView->showAdminProducts(null,null, "Error: faltan completar campos obligatorios");
        }        
    }

    public function AdminDeletesProducts()
    {
     $products_id = $_POST['productid'];
     $this->adminModel->deleteProduct($products_id);
    }

    public function AdminEditProducts()
    {
        $categories = $this->categoriesController->getAllCategories();
        $products_id = $_POST['productid'];
        $product_name = $_POST['productName'];
        $category_id = $_POST['category'];
        $product_price = $_POST['productPrice'];
        $imgUrl = $_POST['imgUrl'];
        $product_description = $_POST['productDescription'];             
        $products = $this->adminModel->editProduct($products_id, $product_name, $category_id, $product_price, $imgUrl, $product_description);
        $this->adminView->showAdminProducts($products,null, $categories);
    }
   
}
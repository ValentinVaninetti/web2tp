
<?php

require_once "../model/AdminModel.php";
require_once "../view/AdminView.php";
require_once "../controller/CategoriesController.php";
require_once "../controller/UserController.php";
require_once "../helper/AuthHelper.php";

class AdminController{

    private $adminModel;
    private $adminView;
    private $categoriesController;
    private $userController;
    private $authHelper;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->adminView = new AdminView();  
        $this->categoriesController = new CategoriesController();    
        $this->userController = new UserController(); 
        $this->authHelper = new AuthHelper();
    }

    public function getAdminUsers()
    {
        $adminUsers = $this->userController->getAllUsers();
        $this->adminView->showAdminUsers($adminUsers);
    } 
    
    public function getAdminCategories()
    {
        $adminCategories = $this->categoriesController->getAllCategories();
        $this->adminView->showAdminCategories($adminCategories);
    }

    public function adminAddCategories()
    {
        $this->authHelper->checkLoggedIn();
        $category_name = $_POST['category-name'];
        $description = $_POST['category-description'];
        if((!empty($category_name))&&(!empty($description))){
            $this->adminModel->addCategory($category_name,$description);
            $this->getAdminCategories();
        } else {
            $this->getAdminCategories();
        }        
       
    }

    public function adminDeletesCategories()
    {
        $this->authHelper->checkLoggedIn();
        $category_id = $_POST['category-id'];
        $this->adminModel->deleteCategory($category_id);        
        $this->getAdminCategories();
        
    }

    public function adminEditCategories()
    {
        
        $this->authHelper->checkLoggedIn();
        $category_id = $_POST['category-id'];
        $category_name = $_POST['category_name'];
        $category_description = $_POST['category_description'];

        $this->adminModel->editCategory($category_name, $category_description,$category_id);
        $this->getAdminCategories();

    }

    public function getAllAdminProducts()
    {
        $condicion = false;
        session_start();
        if(isset($_SESSION['isAdmin'])){
            $condicion = $_SESSION['isAdmin'];
        }
        $adminProducts = $this->adminModel->getAdminProducts();
        $categories = $this->categoriesController->getAllCategories();
        $this->adminView->showAdminProducts($adminProducts,$condicion, $categories);
        
       
    }    

    public function adminAddProducts()
    {
        $this->authHelper->checkLoggedIn();
        $product_name = $_POST['productName'];
        $category_id = $_POST['category'];
        $product_price = $_POST['productPrice'];
        $product_img = $_POST['imgUrl'];
        $product_description = $_POST['productDescription'];

        if((!empty($product_name))&&(!empty($category_id))&&(!empty($product_price))&&(!empty($product_img))&&(!empty($product_description))){
            $this->adminModel->addProduct($product_name, $category_id, $product_price, $product_img, $product_description);
            $this->getAllAdminProducts();
        }else{
            $this->getAllAdminProducts();
        }        
    }

    public function adminDeletesProducts()
    {
        $this->authHelper->checkLoggedIn();
        $products_id = $_POST['productid'];
        $this->adminModel->deleteProduct($products_id);
        $this->getAllAdminProducts();

    }

    public function adminEditProducts()
    {
        $this->authHelper->checkLoggedIn();
        $categories = $this->categoriesController->getAllCategories();
        $productid = $_POST['productidEdit'];
        $productName = $_POST['productNameEdit'];
        $categoryid = $_POST['categoryEdit'];
        $productPrice = $_POST['productPriceEdit'];
        $imgUrl = $_POST['imgUrlEdit'];
        $productDescription = $_POST['productDescriptionEdit'];
          
        $this->adminModel->editProduct($productName, $categoryid, $productPrice, $imgUrl, $productDescription, $productid);
        $this->getAllAdminProducts();
       
        
    }
   
}
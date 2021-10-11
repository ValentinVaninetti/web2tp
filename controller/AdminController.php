
<?php

require_once "../model/AdminModel.php";
require_once "../view/AdminView.php";
require_once "../controller/CategoriesController.php";

class AdminController{

    private $adminModel;
    private $adminView;
    private $categoriesController;
    
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->adminView = new AdminView();  
        $this->categoriesController = new CategoriesController();     
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
     $product_id = $_POST['productid'];
     $this->adminModel->deleteProduct($product_id);
    }
   
}
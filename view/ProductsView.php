<?php

require_once "../libs/Smarty.class.php";

class ProductsView {
      
    private $smarty;
    
    public function __construct()
    {
        $this->smarty = new Smarty();
    }
    
    public function showProducts($products, $categories){

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $this->smarty->assign('all_products', $products);
        $this->smarty->assign('allCategories', $categories);
        $this->smarty->display("../templates/products.tpl");
                
    }

    public function showDetailedProduct($product){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }        
        $this->smarty->assign('product', $product);
        $this->smarty->display("../templates/productDetails.tpl");
    }
}
<?php

require_once "../libs/Smarty.class.php";

class ProductsView {

    public function showProducts($products, $categories){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $smarty = new Smarty();
        $smarty->assign('all_products', $products);
        $smarty->assign('allCategories', $categories);
        $smarty->display("../templates/products.tpl");
        
        
    }
}
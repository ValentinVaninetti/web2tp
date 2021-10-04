<?php
require_once "../libs/Smarty.class.php";

class ProductsView {

    public function showProducts($products){
        $smarty = new Smarty();
        $smarty->assign('all_products', $products);
        $smarty->display("../templates/products.tpl");
        
    }
}
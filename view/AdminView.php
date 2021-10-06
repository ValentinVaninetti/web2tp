<?php
require_once "../libs/Smarty.class.php";

class AdminView{

    public function showAdminProducts($products){
        $smarty = new Smarty();
        $smarty->assign('all_products', $products);
        $smarty->display("../templates/productsAdmin.tpl");
        
    }
}
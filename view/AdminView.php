<?php
require_once "../libs/Smarty.class.php";

class AdminView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showAdminProducts($products ,$condicion, $Categories){
        $this->smarty->assign('all_products', $products);
        $this->smarty->assign('condicion', $condicion);
        $this->smarty->assign('allCategories', $Categories);
        $this->smarty->display("../templates/productsAdmin.tpl");
        
    }

   
}
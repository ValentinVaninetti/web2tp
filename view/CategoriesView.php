<?php
require_once "../libs/Smarty.class.php";

class CategoriesView {

    private $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty();
    }
    
    public function showCategories($categories){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $this->smarty->asign('all_categories',$categories);
        $this->smarty->display("../templates/products.tpl");
        
    }
}
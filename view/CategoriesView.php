<?php
require_once "../libs/Smarty.class.php";

class CategoriesView {
    
    public function showCategories($categories){
        $smarty = new Smarty();
        $smarty->asign('all_categories',$categories);
        $smarty->display("../templates/products.tpl");
        
    }
}
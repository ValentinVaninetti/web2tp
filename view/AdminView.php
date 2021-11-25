<?php
require_once "../libs/Smarty.class.php";

class AdminView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    public function showAdminProducts($products , $categories){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->smarty->assign('all_products', $products);
       
        $this->smarty->assign('allCategories', $categories);
        $this->smarty->display("../templates/productsAdmin.tpl");
        
    }

    function showUserLocation(){
        header("Location: usersAdmin");
    }

    public function showAdminUsers($adminUsers){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->smarty->assign('all_users', $adminUsers);
        $this->smarty->display("../templates/usersAdmin.tpl");
    }

    public function showAdminCategories($adminCategories){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->smarty->assign('all_categories', $adminCategories);
        $this->smarty->display("../templates/categoriesAdmin.tpl");
    }   

   
}
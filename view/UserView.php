<?php
require_once "../libs/Smarty.class.php";

class UserView{

    public function showUsers($users){
        $smarty = new Smarty();
        $smarty->assign('all_users',$users);
        $smarty->display('../templates/userslists.tpl');
    }
}
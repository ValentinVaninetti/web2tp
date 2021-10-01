<?php
require_once "../utils/DataBase.php";

class LoginModel{

    private $db;

    public function __construct()
    {
        $this->db = DataBase::getDataBase();
    }
    
    

}
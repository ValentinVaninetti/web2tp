<?php

class DataBase{

    public static function getDataBase(){
        
        return new PDO('mysql:host=localhost;'
        .'dbname=web2tp;charset=utf8'
        , 'root', '');
    }
}
<?php
require_once "../utils/RouterClass.php";
require_once "../controller/ApiController.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    $r->setDefaultRoute("HomeController", "getHome");
    

$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>
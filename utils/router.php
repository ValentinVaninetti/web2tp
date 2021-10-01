<?php
require_once "../controller/HomeController.php";
require_once "../controller/UserController.php";
require_once "../controller/LoginController.php";
require_once "./RouterClass.php";



define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();
$r->setDefaultRoute("HomeController", "getHome");
$r->addRoute("home", "GET","HomeController","getHome");
$r->addRoute("signup", "GET", "LoginController", "getLogin");
$r->addRoute("signup", "POST", "LoginController", "newUser");
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>

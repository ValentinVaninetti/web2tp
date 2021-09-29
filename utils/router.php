<?php
require_once "../controller/UserController.php";
require_once 'RouterClass.php';



define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();
$r->setDefaultRoute("UserController", "getAllUsers");


/*// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);


switch ($params[0]){
    case 'home':
        new UserController()->getAllUsers();
        break;
}

switch ($params[0]) {
    case 'about': 
        if (isset($params[1])) {
            showAbout($params[1]); 
        } else {
            showAbout(); 
        }
        break;
    case 'sumar':
    case 'restar':
    case 'dividir':
    case 'multiplicar': 
        showOperacion($params[1], $params[2], $params[0]);
        break;
    case 'pi': 
        showPi(); 
        break;
    case 'home': 
        showHome(); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}*/


?>
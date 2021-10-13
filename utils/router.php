<?php
    require_once "../controller/HomeController.php";
    require_once "../controller/UserController.php";
    require_once "../controller/LoginController.php";
    require_once "../controller/ProductsController.php";
    require_once "../controller/AdminController.php";
    require_once "../controller/CategoriesController.php";
    require_once "./RouterClass.php";


    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    $r->setDefaultRoute("HomeController", "getHome");
    $r->addRoute("home", "GET","HomeController","getHome");
    $r->addRoute("signup", "GET", "LoginController", "getSignup");
    $r->addRoute("signup", "POST", "LoginController", "newUser");
    $r->addRoute("products", "GET","ProductsController", "getAllProducts");
    $r->addRoute("productsAdmin", "GET", "AdminController", "getAllAdminProducts");
    $r->addRoute("addProduct", "POST", "AdminController", "AdminAddProducts");
    $r->addRoute("deleteProduct", "POST", "AdminController", "AdminDeletesProducts");
    $r->addRoute("editProduct", "POST", "AdminController", "AdminEditProducts");
    $r->addRoute("login", "GET", "LoginController", "getLogin");
    $r->addRoute("login", "POST", "LoginController", "checkLogin");
    $r->addRoute("search", "POST", "ProductsController", "getFilteredProducts");
    $r->addRoute("usersAdmin", "GET", "AdminController", "getAdminUsers");
    $r->addRoute("categoriesAdmin", "GET", "AdminController", "getAdminCategories");
    $r->addRoute("addCategory", "POST", "AdminController", "adminAddCategories");
    $r->addRoute("deleteCategory", "POST", "AdminController", "adminDeletesCategories");
    $r->addRoute("logout", "GET", "LoginController", "logout");
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>

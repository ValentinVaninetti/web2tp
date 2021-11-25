<?php

    require_once "../controller/UserController.php";
    require_once "../controller/LoginController.php";
    require_once "../controller/ProductsController.php";
    require_once "../controller/CategoriesController.php";
    require_once "./RouterClass.php";


    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    //home//
    $r->setDefaultRoute("UserController", "getHome");
    $r->addRoute("home", "GET","UserController","getHome");

    //signup//
    $r->addRoute("signup", "GET", "LoginController", "getSignup");
    $r->addRoute("signup", "POST", "LoginController", "newUser");

    //products && admin management of products//
    $r->addRoute("products", "GET","ProductsController", "getAllProducts");
    $r->addRoute("productDetails", "POST","ProductsController", "getProductById");
    $r->addRoute("productsAdmin", "GET", "ProductsController", "getAllAdminProducts");
    $r->addRoute("addProduct", "POST", "ProductsController", "adminAddProducts");
    $r->addRoute("deleteProduct", "POST", "ProductsController", "adminDeletesProducts");
    $r->addRoute("editProduct", "POST", "ProductsController", "adminEditProducts");
    $r->addRoute("search", "POST", "ProductsController", "getFilteredProducts");
    $r->addRoute("advancedSearch", "POST", "ProductsController", "getListBySearch");

    //login && logout//
    $r->addRoute("login", "GET", "LoginController", "getLogin");
    $r->addRoute("login", "POST", "LoginController", "checkLogin");
    $r->addRoute("logout", "GET", "LoginController", "logout");

    //admin management of users//
    $r->addRoute("usersAdmin", "GET", "UserController", "getAdminUsers");
    $r->addRoute("editUser", "POST", "UserController", "adminGivesPrivileges");
    $r->addRoute("deleteUser", "POST", "UserController", "adminDeletesUsers");

    //admin management of categories//
    $r->addRoute("categoriesAdmin", "GET", "CategoriesController", "getAdminCategories");
    $r->addRoute("addCategory", "POST", "CategoriesController", "adminAddCategories");
    $r->addRoute("deleteCategory", "POST", "CategoriesController", "adminDeletesCategories");
    $r->addRoute("editCategory", "POST", "CategoriesController", "adminEditCategories");   
    
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);

?>

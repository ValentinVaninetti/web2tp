<?php

require_once "../utils/RouterClass.php";

require_once "../api/CommentApiController.php";

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();    
    $r->addRoute("comments/:ID", "GET", "CommentApiController", "getProductComments");
    $r->addRoute("comments", "POST", "CommentApiController", "addComment");
    $r->addRoute("comments/:ID", "DELETE", "CommentApiController", "deleteComment");
    $r->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

?>
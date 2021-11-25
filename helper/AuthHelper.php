<?php
    class AuthHelper {

        function __construct(){
            
        }
        function checkLoggedIn() {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(!isset($_SESSION['email'])){
                header("Location: " .BASE_URL."login");
                die();
            }
        }

        function logout() {
            session_start();
            session_destroy();
        }


     }



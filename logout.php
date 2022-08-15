<?php

session_start();
session_unset();
     

session_destroy();



$_SESSION['logout'] = true;



if (isset($_SESSION ["logout"])) {
     
    header("Location: http://localhost/Project%201/examples/login.php");

    exit;

}












?>
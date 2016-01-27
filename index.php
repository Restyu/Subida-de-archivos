<?php

require 'ruta.php';

session_start();
 
if( isset($_GET['logout']) ){
    
    unset($_SESSION['user']);

    session_destroy();
    
    header("Location: ".$base_path.'/login');
}

var_dump($_SESSION['user']);

require_once 'home/home.html.php';
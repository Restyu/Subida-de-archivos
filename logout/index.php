<?php  
require_once '../ruta.php';

session_start();
 

    
    unset($_SESSION['user']);

    session_destroy();
    
    header("Location: ".$base_path.'/login');

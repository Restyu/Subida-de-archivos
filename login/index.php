<?php 

require_once '../ruta.php';
require_once '../db/function.php';

session_start();

if( isset($_GET['login']) ){

	$nombre = $_POST['user'];
	$pass = $_POST['password'];

	
    if ($alumno = login($nombre ,$pass)) {
           
        $_SESSION['user'] = $nombre;

        var_dump($_SESSION['user']);

        header('Location: '.$base_path.'/index.php');

    }else{

        echo 'Datos incorrectos';
    }

    exit();

}else{

    require_once 'login.html.php';
}




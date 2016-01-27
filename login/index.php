<?php 

require_once '../ruta.php';

session_start();

if( isset($_GET['login']) ){

	$nombre = $_POST['user'];
	$pass = $_POST['password'];

	
    if( $_POST['user'] == 'javi' && $_POST['password'] == '1234' ){
           
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




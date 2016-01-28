<?php

require_once '../db/connect.php';
//require_once '../ruta.php';

if (isset($_GET['add'])) {
	
	$base_path = $_SERVER['DOCUMENT_ROOT'].'/practica2/upload/';
	$base_imagen_path = $base_path . "/imagenes/";

	var_dump($_POST);

	$nombre = $_POST['name'];

	$file_name = $_FILES['imagen']['name'];
	$file_size = $_FILES['imagen']['size'];
	$file_tmp = $_FILES['imagen']['tmp_name'];
	$file_type = $_FILES['imagen']['type'];
	$file_error = $_FILES['imagen']['error'];

	try {

	$sql = "INSERT INTO Archivos (name_file,ruta) values (:nombre , :ruta)";
		
		$ruta = $base_path.'imagenes/'.$file_name;
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':nombre', $file_name);
		$ps->bindValue(':ruta', $file_name);
		$ps->execute();
	
	} catch (Exception $e) {

	die ("no se ha podido enviar la imagen");

	}	

	move_uploaded_file($file_tmp, $base_imagen_path . $file_name);

}else{

	require_once 'upload.html.php';
}

<?php 

require_once 'connect.php';

function login($nombre , $pass){
	
	global $pdo;
	global $salt;

	try {
		$sql = 'select * from Alumnos where name = :nombre and pass = :pass';
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':nombre', $nombre);
	    $ps->bindValue(':pass', $pass);
        $ps->execute();
	} catch (Exception $e) {
		die("error");
	}

	$alumnos = $ps->fetch(PDO::FETCH_ASSOC);

	return $alumnos;
}
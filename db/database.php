<?php 

require_once ('connect.php');

try {
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE TABLE Alumnos (
		id 			INT AUTO_INCREMENT PRIMARY KEY,
		name		VARCHAR(255) NOT NULL,
		pass        VARCHAR(255) NOT NULL,
		email 		VARCHAR(255) NOT NULL
		
	)	DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->exec($sql);

	$sql = "CREATE TABLE Archivos (
		id			INT AUTO_INCREMENT PRIMARY KEY,
		id_alumno   INT,
		name_file	VARCHAR(255) NOT NULL,
		ruta 		VARCHAR(255) NOT NULL,
		creada		TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

		FOREIGN KEY (id_alumno) REFERENCES Alumnos(id)
			ON UPDATE CASCADE
			ON DELETE SET NULL

	)	DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->exec($sql);

} catch (Exception $e) {

	die("No se ha podido crear la tabla 'tasks':". $e->getMessage());
}
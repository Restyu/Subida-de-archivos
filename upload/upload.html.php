<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página de Prácticas - Subir archivo</title>
</head>
<body>
	<h1>Subir Práctica</h1>
	
	<form action="?add" method="post" enctype="multipart/form-data">
		<div>
		<label for="name">Nombre:</label>
		<input type="text" name="name" value="">
		</div>
		<div>
			<label for="imagen">imagen</label>
			<input type="file" name="imagen" id="imagen" value="">
		</div>
		<div>
		<input type="submit" value="Subir Archivo">
		</div>
	</form>
</body>
</html>
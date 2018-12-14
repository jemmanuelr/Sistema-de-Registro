<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALC Sistema de Ayudas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" href="ico.ico">
</head>
<body>
	<?php
		include '_nav.php';
	?>
	<div>
		<br><hr><br>
		<img src="psuv.png" align="left" width="200px">
		<img src="logo.png" align="right" width="200px">
		<br><br><br><br><br><br>

		<form action="cons3.php" method="post">

			<h1 class="DOS">CONSULTA DE AYUDAS</h1>

			<hr>

			<select name="consulta" class="input">
				<option value="id">Nro. de Control</option>
				<option value="cedula">Nro. de Cedula</option>
				<option value="nombre">Nombres y Apellidos</option>
				<option value="telefono">Telefono de Contacto</option>
				<option value="solicitud">Solicitud Realizada</option>
				<option value="estado">Estado</option>
				<option value="municipio">Municipio</option>
				<option value="parroquia">Parroquia</option>
				<option value="cvota">Centro de Votaci&oacuten</option>
			</select>
			<br>
			<br>
			<input type="text" name="cedula" class="input">

			<br>

			<br>
			
			<input class="boton" type="submit" value="CONSULTAR">
			<br>
			<br>
		</form>

	</div>

</body>
</html>
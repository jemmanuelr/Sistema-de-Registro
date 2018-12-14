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

		<form action="act.php" method="post">

			<h1 class="DOS">ACTUALIZACION DE AYUDAS</h1>

			<hr>


			<input type="text" name="consulta" value="cedula" hidden>
			<br>
			<br>
			<input type="text" name="cedula" class="input" placeholder="INTRODUSCA EL NUMERO DE CEDULA">

			<br>

			<br>
			
			<input class="boton" type="submit" value="CONSULTAR">
			<br>
			<br>
		</form>

	</div>

</body>
</html>
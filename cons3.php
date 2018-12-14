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
		<form>
			<h1 class="DOS">CONSULTA DE SOLICITUD DE AYUDA</h1>
			<br>
			<hr>
			<?php
				include 'consulta1.php';
			?>
			<br>
			<a href="cons1.php">
				<input class="btn" type="button" value=' VOLVER '>
			</a>
			<input class="btn" type="button" onclick='window.print();' value=' IMPRIMIR '>
		</form>
	</div>
</body>
</html>
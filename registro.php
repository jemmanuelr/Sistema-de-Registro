<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALC Sistema de Ayudas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" href="ico.ico">
	<script>
		<?php
		if ( !empty( $_GET['exists'] ) && $_GET['exists'] == 'true' ) {
		?>	
		alert( 'Ya hay una ayuda registrada para el portador de este numero de Cédula.!' );
		<?php
		}
		?>
	</script>
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

		<form action="recoje.php" method="post">

			<h1 class="DOS">REGISTRO DE AYUDAS</h1>

			<hr>

			<h2 class="dos">CONSULTA DE NUMERO DE CEDULA</h2>

			<input type="checkbox" name="nacionalidad" class="nac" value="V" checked><p> V </p>

			<input type="checkbox" name="nacionalidad" class="nac" value="E"><p> E </p> 

			<input type="number" name="cedula"  class="input" required placeholder="INTRODUZCA CEDULA">
			
			<br>
			<br>

			<input type="submit" name="ENVIAR" value="ENVIAR" class="boton">

			<input type="reset" name="reset" value="RESET" class="boton">

		</form>

	</div>

</body>
</html>
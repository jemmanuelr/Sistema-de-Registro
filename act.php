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
		include 'act2.php';
	?>
	<div>
		<br><hr><br>
		<img src="psuv.png" align="left" width="200px">
		<img src="logo.png" align="right" width="200px">
		<br><br><br><br><br><br>
		<h1 class="dos">ACTUALIZACI&OacuteN DE SOLICITUD DE AYUDA</h1>
		<hr>
		<form action="actr.php" method="POST">
			<table>
				<tr>
					<td><h2>DATOS DEL SOLICITANTES</h2></td>
					<td>
						<input class='input' id="input" type='text' hidden name='id' value='<?php echo $row['id']; ?>' required>
						<br>
						<input class='input' id="input" type='text' name='cedula' value='<?php echo $row['cedula']; ?>' required>
						<br><br>
						<input class='input' id="input" type='text' name='nombre' value='<?php echo $row['nombre']; ?>' required>
						<br><br>
						<input class='input' id="input" type='text' name='telefono' value='<?php echo $row['telefono']; ?>' required>
						<br><br>
					</td>
				</tr>
				<tr>
					<td><h2>DATOS ELECTORALES</h2></td>
					<td>
						<br>
					    <input class='input' id="input" type='text' name='estado' value='<?php echo $row['estado']; ?>' required>
					    <br><br>
					    <input class='input' id="input" type='text' name='municipio' value='<?php echo $row['municipio']; ?>' required>
					    <br><br>
					    <input class='input' id="input" type='text' name='parroquia' value='<?php echo $row['parroquia']; ?>' required>
					    <br><br>
					    <input class='input' id="input" type='text' name='cvota' value='<?php echo $row['cvota']; ?>' required>
					    <br><br>
					</td>
				</tr>
				<tr>
					<td>
						<h2>DATOS DE LA SOLICITUD</h2>
					</td>
					<td>
						<br><br>
						<input class='input' id="input" type='text' name='fecha' value='<?php echo $row['fecha']; ?>' required>
					    <br><br>
						<select class="input" id="input" name="solicitud" required>
							<option value="">Seleccione una opci&oacuten</option>
						   	<option value="AYUDA ECONOMICA">Ayuda economica</option>
						   	<option value="MATERIALES DE CONSTRUCCION">Materiales de construccion</option>
						   	<option value="ACONDICIONAMIENTO">Acondicionamiento</option>
						   	<option value="SALUD">Salud</option>
						   	<option value="EMPLEO">Empleo</option>
						</select>
						<br><br>
						<input class='input' id="input" type='text' name='observacion' value='<?php echo $row['observacion']; ?>' required>
						<br><br>
						<select class="input" id="input" name="status" required>
							<option value="">Seleccione una opci&oacuten</option>
						   	<option value="PENDIENTE">Pendiente</option>
						   	<option value="APROBADA">Aprobada</option>
						</select>
						<br><br>
					</td>
				</tr>
			</table>
			<br><br>
			<input type='submit' name='actualizar' value='ACTUALIZAR' class='boton'>
			<br><br>
		</from>
	</div>
</body>
</html>
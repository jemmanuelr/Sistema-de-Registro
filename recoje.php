<?php
	$cedula = $_POST["cedula"];
	include 'conexion.php';
	$result = mysql_query("SELECT  `cedula` FROM  `solicitud` WHERE  `cedula`='".$cedula."'" );
	$ced = mysql_fetch_array($result);
	//$ced = mysql_fetch_row($result):
	if ( $ced[0] > 0 ) {
		header( "location: index.php?exists=true" );
		exit();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ALC Sistema de Ayudas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" href="ico.ico">
	<script type="text/javascript">
		function upperCase(){
			var x= document.getElementById("input").value
			document.getElementById("input").value=x.toLowerCase();
		}
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
		<?php 
			include 'cne.php';
		?>
		<form action='crear.php' method='post'>
			<table>
				<tr>
					<td>
						<h2>DATOS DEL SOLICITANTE</h2>			
					</td>
					<td>
						<strong>CEDULA</strong>
						<br>
					    <input class='input' id="input" type='text' name='cedula' value='<?php echo $r['cedula']; ?>' readonly>
					    <br>
					    <strong>NOMBRES Y APELLIDOS</strong>
					    <br>
					    <input class='input' id="input" type='text' name='nombre' value='<?php echo $r['nombre']; ?>' readonly>
					    <br>
					    <strong>TELEFONO</strong>
					    <br>
					    <input class='input' id="input" type='text' name='telefono'>
					    <br>			
					</td>
				</tr>
				<tr>
					<td>
						<h2>DATOS ELECTORALES</h2>
					</td>
					<td>
					    <input class='input' id="input" type='text' name='estado' value='<?php echo $r['estado']; ?>' readonly>
					    <br>
					    <input class='input' id="input" type='text' name='municipio' value='<?php echo $r['municipio']; ?>' readonly>
					    <br>
					    <input class='input' id="input" type='text' name='parroquia' value='<?php echo $r['parroquia']; ?>' readonly>
					    <br>
					    <input class='input' id="input" type='text' name='cvota' value='<?php echo $r['centro']; ?>' readonly>
					    <br>			
					</td>
				</tr>
				<tr>
					<td>
						<h2>DATOS DE LA SOLICITUD</h2>			
					</td>
					<td>
						<strong>SOLICITUD</strong>
						<br>
						<select class="input" id="input" name="solicitud">
					    	<option value="AYUDA ECONOMICA">Ayuda economica</option>
					    	<option value="MATERIALES DE CONSTRUCCION">Materiales de construccion</option>
					    	<option value="ACONDICIONAMIENTO">Acondicionamiento</option>
					    	<option value="SALUD">Salud</option>
					    	<option value="EMPLEO">Empleo</option>
					    </select>
					    <br>
					    <strong>OBSERVACION</strong>
					    <br>
					    <input class='input' id="input" type='text' name='observacion' style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
					    <br>
					    <strong>FECHA DE SOLICITUD</strong>
					    <br>
					    <input class='input' id="input" type='date' name='fecha'>
					    <input class='input' id="input" type='text' name='status' value="PENDIENTE" hidden>
					</td>
				</tr>
			</table>
			<br><br>
		    <input type='submit' name='guardar' value='GUARDAR' class='boton'>
		</from>
	</div>

</body>
</html>
<?php
$consulta = $_POST["consulta"];
$cedula = $_POST["cedula"];
include 'conexion.php';
$consulta = ("SELECT `id`, `cedula`, `nombre`, `telefono`, `estado`, `municipio`, `parroquia`, `cvota`, `solicitud`, `observacion`, `status`, `fecha` FROM `solicitud` WHERE `".$consulta."` LIKE '%".$cedula."%'");
$busqueda = mysql_query($consulta);
//var_dump(mysql_fetch_array($busqueda));
echo "<table>
		<tr>
			<td><strong>ID</strong></td>
			<td><center><strong>CEDULA</strong></center></td>
			<td id='tam'><center><strong>NOMBRE</strong></center></td>
			<td><center><strong>TELEFONO</strong></center></td>
			<td><center><strong>ESTADO</strong></center></td>
			<td><center><strong>MUNICIPIO</strong></center></td>
			<td><center><strong>PARROQUIA</strong></center></td>
			<td id='tam1'><center><strong>CENTRO DE VOTACIÓN</strong></center></td>
			<td id='tam3'><center><strong>SOLICITUD</strong></center></td>
			<td><center><strong>FECHA DE SOLICITUD</strong></center></td>
			<td id='tam2'><center><strong>OBSERVACIÓN</strong></center></td>
			<td><center><strong>STATUS</strong></center></td>
		</tr>";
while ($row = mysql_fetch_array($busqueda))
	{
	echo "<tr><td><p>".$row[0]."</p></td><td><p>".$row[1]."</p></td><td><p>".$row[2]."</p></td><td><p>".$row[3]."</p></td><td><p>".$row[4]."</p></td><td><p>".$row[5]."</p></td><td><p>".$row[6]."</p></td><td><p>".$row[7]."</p></td><td><p>".$row[8]."</p></td><td><center><p>".$row[11]."</p></center></td><td><center><p>".$row[9]."</p></center></td><td><center><p>".$row[10]."</p></center></td></tr>";	
	}
echo "</table>";
?>
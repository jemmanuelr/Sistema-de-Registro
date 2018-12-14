<?php
$consulta = $_POST["consulta"];
$cedula = $_POST["cedula"];

include 'conexion.php';

$consulta = ("SELECT `id`, `cedula`, `nombre`, `telefono`, `estado`, `municipio`, `parroquia`, `cvota`, `solicitud`, `observacion`, `fecha` FROM `solicitud` WHERE `".$consulta."` LIKE '%".$cedula."%'");

$busqueda = mysql_query($consulta);

$row = mysql_fetch_array($busqueda);

?>
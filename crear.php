<?php

include 'conexion.php';

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$solicitud = $_POST["solicitud"];
$observacion = $_POST["observacion"];
$fecha = $_POST["fecha"];
$status = $_POST["status"];
$estado = $_POST["estado"];
$municipio = $_POST["municipio"];
$parroquia = $_POST["parroquia"];
$cvota = $_POST["cvota"];
//registro de ayuda
mysql_query("INSERT INTO `solicitud`(`cedula`, `nombre`, `telefono`, `solicitud`, `observacion`, `fecha`, `status`, `estado`, `municipio`, `parroquia`, `cvota`)  VALUES ('".$cedula."','".$nombre."','".$telefono."','".$solicitud."','".$observacion."','".$fecha."','".$status."','".$estado."','".$municipio."','".$parroquia."','".$cvota."')");
//consulta del numero de control
$busca = mysql_query("SELECT `id` FROM `solicitud` WHERE `cedula`=$cedula");
$buscar = mysql_fetch_row($busca);
mysql_close($conexion);

$url="registro.php";
echo "<SCRIPT>alert('El registro de ayuda solicitado por $nombre se realizo con exito bajo el numero de control $buscar[0]'); window.location='$url';</SCRIPT>"

?>
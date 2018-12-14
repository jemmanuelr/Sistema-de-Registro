<?php

include 'conexion.php';

$id = $_POST["id"];
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$fecha = $_POST["fecha"];
$solicitud = $_POST["solicitud"];
$observacion = $_POST["observacion"];
$estado = $_POST["estado"];
$municipio = $_POST["municipio"];
$parroquia = $_POST["parroquia"];
$cvota = $_POST["cvota"];

$algo = mysql_query("UPDATE `solicitud` SET `cedula`='".$cedula."',`nombre`='".$nombre."',`telefono`='".$telefono."', `solicitud`='".$solicitud."', `fecha`='".$fecha."', `observacion`='".$observacion."',`estado`='".$estado."',`municipio`='".$municipio."',`parroquia`='".$parroquia."',`cvota`='".$cvota."' WHERE  `solicitud`.`id` ='".$id."'");

mysql_close($conexion);

$url="index.php";
echo "<SCRIPT>window.location='$url';</SCRIPT>"

?>


<?php

	include 'conexion.php';

	$pen = mysql_query("SELECT COUNT( * ) status FROM solicitud WHERE status ='PENDIENTE'");
	$pendientes = mysql_fetch_assoc($pen);

	$apro = mysql_query("SELECT COUNT( * ) status FROM solicitud WHERE status ='APROBADA'");
	$aprobadas = mysql_fetch_assoc($apro);
?>
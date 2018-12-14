<?php
$conexion = mysql_connect('alcaldiadematurin.gob.ve','root','Maturinmysql2013')
	or die ('Conexion denegada, el servidor de base de datos no responde');
$db = mysql_select_db('ayuda')
	or die('La base de dato NO EXISTE');
?>
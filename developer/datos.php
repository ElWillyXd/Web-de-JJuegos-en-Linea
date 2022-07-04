<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$conexion = mysql_connect("localhost","c2521240_datos","ge01piSAva","c2521240_datos");



mysql_select_db("datosweb");
mysql_query("INSERT INTO datosweb (nombre,apellido,correo,mensaje) VALUES ('$nombre','$apellido','$email','$mensaje')");



?>
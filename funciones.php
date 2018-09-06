<?php
try {
	$conexion = new PDO('mysql:host=localhost;dbname=practica_2;charset=utf8',
	'root','');
} catch (PDOException $e) {
	echo 'Error: ' . $e;
}

function limpiardatos($datos) {
	$datos = trim($datos);
	$datos = stripcslashes($datos);
	$datos = htmlspecialchars($datos);
	$datos = strtolower($datos);
	return $datos;
}






?>
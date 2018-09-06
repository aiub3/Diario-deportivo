<?php 
require 'header.php';


$liga = (isset($_GET['liga'])) ? limpiardatos($_GET['liga']) : 0;
$equipo = (isset($_GET['equipo'])) ? limpiardatos($_GET['equipo']) : 0;

if ($liga !== 0 && $equipo === 0) {
$statement = $conexion->prepare('SELECT * FROM articulos WHERE liga = :liga');
$statement->execute(array(':liga' => $liga));
$articulos = $statement->fetchAll();
}

if ($liga === 0 && $equipo !== 0) {
$statement = $conexion->prepare('SELECT * FROM articulos WHERE equipo = :equipo');
$statement->execute(array(':equipo' => $equipo));
$articulos = $statement->fetchAll();
}

require 'seccionhtml.php';
require 'footer.php';
?>
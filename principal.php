<?php 
require 'header.php';

$statement = $conexion->prepare('SELECT * FROM articulos');
$statement->execute();
$articulos = $statement->fetchAll();	









require 'principalhtml.php';
require 'footer.php';
?>
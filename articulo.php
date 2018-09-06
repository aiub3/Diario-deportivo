<?php 
require 'header.php';

$id = (isset($_GET['id'])) ? (int)$_GET['id'] : 1;

$statement = $conexion->prepare('SELECT * FROM articulos WHERE ID =:id');
$statement->execute(array(':id' => $id));
$articulo = $statement->fetch();





require 'articulohtml.php';
require 'footer.php';
?>
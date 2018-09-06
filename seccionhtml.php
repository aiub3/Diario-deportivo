<section class="seccion">
<?php foreach($articulos as $articulo): ?>
	<article class="articulos">
		<img alt="Imagen" src="imagenes/<?php echo $articulo['imagen']; ?>" />
		<h3><?php echo $articulo['titulo']; ?></h3>
		<p><?php echo $articulo['extracto']; ?></p>
		<a href="articulo.php?id=<?php echo $articulo['ID']; ?>" >Leer más.</a>
	</article>
<?php endforeach; ?>
</section>
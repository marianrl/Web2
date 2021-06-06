<div class="btn-group w-100 mb-2">
	<?php
	$arrayCategoria = json_decode(file_get_contents('array/categoria.json'), TRUE);
	foreach ($arrayCategoria as $categoria) {
	?>
		<a class="btn btn-info" href="tienda.php?categoria=<?php echo $categoria['id'] ?>"> <?php echo $categoria['categoria'] ?> </a>
	<?php
	}
	?>
<a href="tienda.php?categoria=" class="btn btn-info">Todas</a>
	
</div>
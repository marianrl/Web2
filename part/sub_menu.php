<div class="btn-container">
	<a href="tienda.php?categoria=" class="btn btn-info">Todos</a>
	<?php
	$arrayCategoria = json_decode(file_get_contents('array/categoria.json'), TRUE);
	foreach ($arrayCategoria as $categoria) {
	?>
		<a class="btn btn-info" href="tienda.php?categoria=<?php echo $categoria['id'] ?>"> <?php echo $categoria['categoria'] ?> </a>
	<?php
	}
	?>
</div>
<div class="btn-container">
	<a href="tienda.php?categoria=" class="btn btn-info">Todos</a>
	<?php
	$arraySubCategoria = json_decode(file_get_contents('array/subCategoria.json'), TRUE);
	foreach ($arraySubCategoria as $subCategoria) {
	?>
		<a class="btn btn-info" href="tienda.php?categoria=<?php echo $subCategoria['id'] ?>"> <?php echo $subCategoria['subCategoria'] ?> </a>
	<?php
	}
	?>
</div>
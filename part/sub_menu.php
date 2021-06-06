<div id="sidebar" class="span3">
	<h3>Categorias</h3>
		<div class="well well smal">
			<ul class="nav navlist">

		<?php
				$arrayCategoria = json_decode(file_get_contents('array/categoria.json'),TRUE);
				foreach($arrayCategoria as $categoria){
			?>
				<li><a href="tienda.php?categoria=<?php echo $categoria['id'] ?>"><spam class="icon-chevron-right"></spam><?php echo $categoria['categoria'] ?></a></li>
			<?php
			}
			?>
				<li><a href="tienda.php?categoria="><spam class="icon-chevron-right"></spam>Todas</a></li>
			</ul>
		</div>

</div>
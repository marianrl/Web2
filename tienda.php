<?php
require_once("part/head.php");
?>
<?php
require_once("part/header.php");
?>
<body>
<main>
    <section class="conteiner">
        <h1 class="conteiner fluid">Tienda</h1>
        <div class="container-fluid galeriadivcards">
            <div class="row">
                <?php
                $arrayProductos = json_decode(file_get_contents('array/producto.json'), TRUE);
                /*var_dump($arrayProductos);die(); */
                foreach ($arrayProductos as $productos) {
                ?>
                    <ul class="thumbnails">
                        <li>
                            <div class="thumbnail">
                                <a href="product_details.php"><img src="imagenes/<?php echo $productos['imagen'] ?>" alt="" class="img-fluid"></a>
                                <div class="caption cntr">
                                    <p><strong><?php echo $productos['nombre'] ?></strong></p>
                                    <p class="pi"><?php echo cortar_palabras($productos['descripcion'], 50) ?></p>
                                    <h4><a class="shopBtn" href="#" title="add to cart"> VER </a></h4>
                                    <br class="clr">
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php
                    } ?> 
            </div>
        </div>   
    </section>
</main>

<?php
require_once('part/footer.php');
?>

<?php
require_once('part/java.php');
?>
</body>
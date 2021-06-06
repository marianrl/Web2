<?php

require_once("part/head.php");
require_once("part/header.php");
?>


<main>
        <section class="conteiner">
            <h1 class="conteiner fluid">Tienda</h1>
            <?php
                require_once("part/sub_menu.php");
            ?>
            <div class="container-fluid galeriadivcards">
                <div class="row">

                <?php
                $arrayProductos = json_decode(file_get_contents('array/producto.json'), TRUE);
                /*var_dump($arrayProductos);die(); */
                $producto = $arrayProductos[$_GET['producto']];
                
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <article class="card">
                        <img src="imagenes/<?php echo $producto['imagen'] ?>" alt="" class="img-fluid">
                            <h2><strong><?php echo $producto['nombre'] ?></strong></h2>
                            <p class="pi"><?php echo $producto['descripcion'] ?>
                            </p>
                        </article>
                    </div>
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
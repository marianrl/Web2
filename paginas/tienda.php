<!doctype html>
<html lang="es">

<?php

require_once("../part/head.php");

?>

<body>
      <header id="_top">

     <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../index.php">
                <img src="../imagenes/logo.png" width="102" height="100" alt="Logo teckel's">
            </a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/quienessomos.php"><img class="icono" src="../imagenes/documento.png" alt="quienessomos">¿Quiénes somos?</a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="../paginas/tienda.php"><img class="icono" src="../imagenes/carro.png" alt="tienda">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/contacto.php"><img class="icono" src="../imagenes/carta.png" alt="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paginas/faqs.php"><img class="icono" src="../imagenes/ayudar.png" alt="Preguntas frecuentes">Faq's</a>
                    </li>
                
                </ul>
                
            </div>
        </nav>
    </div>

    </header>

    <main>
        <section class="conteiner">
            <h1 class="conteiner fluid">Tienda</h1>
            <div class="container-fluid galeriadivcards">
                <div class="row">
                    <div class=" d-lg-block col-lg-12">
                        <article class="card">
                            <img src="../imagenes/torta6.jpg" alt="Torta de Frutilla" width="1600" height="400" class="rounded img-fluid">
                            <h2>Tarta de Frutilla</h2>
                            <p class="pi">Tarta de Frutilla rellena con crema pastelera, decorada con crema chantilly</p>
                        </article>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="card">
                            <img src="../imagenes/torta7.jpg" alt="Lemon Pie" width="820" height="1025" class="rounded img-fluid">
                            <h2>Lemon Pie</h2>
                            <p class="pi">Clásica torta rellena con una suave crema de limón decorada con merengue italiano</p>
                        </article>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="card">
                            <img src="../imagenes/torta8.jpg" alt="Cannoli" width="820" height="1025" class="rounded img-fluid">
                            <h2>Cannoli</h2>
                            <p class="pi">Cannoli, podes pedir tu relleno de crema clásica de ricotta o crema pastelera</p>
                        </article>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="card">
                            <img src="../imagenes/torta9.jpg" alt="Pan dulces" width="820" height="1024" class="rounded img-fluid ">
                            <h2>Torta personalizada</h2>
                            <p class="pi">Torta de frutos rojos con chocolate blanco, podes elegir el relleno, cobertura y color</p>
                        </article>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <article class="card">
                            <img src="../imagenes/torta10.jpg" alt="Pan dulces" width="820" height="1024" class="rounded img-fluid ">
                            <h2>Pan dulces</h2>
                            <p class="pi">Pan dulce, con frutos secos y fruta abrillantada o con chips de chocolate</p>
                        </article>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="page-footer font-small unique-color-dark pt-4 col">
        <div>
            <a href="#_top" target="_top"> <img src="../imagenes/arrow.png" alt="icono flecha arriba" width="52" height="52" class="icn">
            </a>
            <div class="container line">
                <ul class="list-unstyled list-inline text-center py-2 futl">
                    <li class="list-inline-item ic">
                        <a href="https://es-la.facebook.com/"><img src="../imagenes/f.png" alt="Logo Facebook" width="52" height="52" class="ic"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/teckelsbakery/"><img src="../imagenes/h.png" alt="Logo Instagram" width="52" height="52" class="ic"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><img src="../imagenes/c.png" alt="Logo Compartir" width="52" height="52" class="ic"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright text-center py-3 futbot">©2020 Todos los derechos reservados.
        </div>


    </footer>
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<!doctype html>
<html lang="es">
<?php

require_once("part/head.php");

?>

<body>

<?php

require_once("part/header.php");

?>
    <main>
        <section>
            <h1>Teckel's Bakery</h1>

            <div class="container seccion">
                <div class="col-lg-12">
                    <div id="miCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Indicadores -->
                        <ul class="carousel-indicators">
                            <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#miCarousel" data-slide-to="1"></li>
                            <li data-target="#miCarousel" data-slide-to="2"></li>
                        </ul>

                        <!-- Las fotos -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/torta1.jpeg" alt="torta oreo" width="1072" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta2.jpeg" alt="surtido tortas" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta3.jpeg" alt="marquise" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta4.jpeg" alt="cheesecake" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta5.jpeg" alt="lemon pie" width="1024" height="1280">
                            </div>
                        </div>

                        <!-- Controles a izq y der -->
                        <a class="carousel-control-prev" href="#miCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#miCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container col-lg-6 col-sm-5 col-md-6">
                <p><span>Bienvenidos a Teckel's bakery, nos especializamos en pastelería clásica, todos nuestros
                        productos son artesanales y elaborados el día de la entrega para preservar su frescura</span>
                </p>
                <p><span>Tomamos pedidos con 48hs de anticipación para poder brindarte el mejor servicio. No dudes en
                        contactarnos!</span></p>
            </div>


            <div class="container seccion">
                <div class="col-lg-12">
                    <div id="miCarousel1" class="carousel slide" data-ride="carousel">

                        <!-- Indicadores -->
                        <ul class="carousel-indicators">
                            <li data-target="#miCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#miCarousel" data-slide-to="1"></li>
                            <li data-target="#miCarousel" data-slide-to="2"></li>
                        </ul>

                        <!-- Las fotos -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/torta1.jpeg" alt="torta oreo" width="1072" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta2.jpeg" alt="surtido tortas" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta3.jpeg" alt="marquise" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta4.jpeg" alt="cheesecake" width="1024" height="1280">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/torta5.jpeg" alt="lemon pie" width="1024" height="1280">
                            </div>
                        </div>

                        <!-- Controles a izq y der -->
                        <a class="carousel-control-prev" href="#miCarousel1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#miCarousel1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container col-lg-6 col-sm-5 col-md-6">
                <p><span>Podes elegir nuestros productos desde la pestaña tienda, contamos con una amplia variedad de
                        tortas, cookies, budines, entre otros.</span></p>
                <p><span>Hacemos tortas personalizadas, no dudes en consultarnos por tamaños, sabores, colores y
                        coberturas!</span></p>
            </div>
        </section>
    </main>

    <footer class="page-footer font-small unique-color-dark pt-4 col">
        <div>
            <a href="#_top" target="_top"> <img src="imagenes/arrow.png" alt="icono flecha arriba" width="52"
                    height="52" class="icn">
            </a>
            <div class="container line">
                <ul class="list-unstyled list-inline text-center py-2 futl">
                    <li class="list-inline-item ic">
                        <a href="https://es-la.facebook.com/"><img src="imagenes/f.png" alt="Logo Facebook" width="52"
                                height="52" class="ic"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/teckelsbakery/"><img src="imagenes/h.png"
                                alt="Logo Instagram" width="52" height="52" class="ic"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><img src="imagenes/c.png" alt="Logo Compartir" width="52" height="52"
                                class="ic"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright text-center py-3 futbot">©2020 Todos los derechos reservados.
        </div>


    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
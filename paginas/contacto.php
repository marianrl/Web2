<!doctype html>
<html lang="es">

<?php

    require_once("../part/head.php");

?>

<?php

    require_once("../part/header.php");

?>

<main>
    <title>Contacto</title>
    <section>
        <h1 class="conteiner fluid">Contacto</h1>

        <h3>
            <a href="https://www.google.com.ar/maps/@-34.6010516,-58.4287612,15z" target="_blank"><img
                    src="../imagenes/mapa.jpeg" alt="mapa" width="1280" height="716"
                    class="mapa-fluid  container-fluid col-lg-6 col-md-6 col-sm-6 col-6"></a>

        </h3>

        <aside class="container-fluid col-lg-12 col-md-12 col-sm-6 col-8 aside">
            <h2 class="container-fluid">Dejanos tu consulta</h2>
            <p class="p2 container-fluid"><span class="block">Pero antes…</span> <span>¿Has leído nuestras <a
                        class="oblique" href="faqs.php">preguntas frecuentes? </a></span> <span> Quizá contengan la
                    información que buscas, </span><span class="oblique">¡y así te ahorrararías tiempo, y a Teckel's
                    recursos!</span></p>
        </aside>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 conteiner for">
            <form action="#" method="get">

                <fieldset class="formulario">
                    <legend>Datos personales</legend>
                    <div class="form-group container-fluid">
                        <label for="inputEmail3" class="col-sm-2 col-form-label" id="inputEmail4">
                            Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label"> Apellido:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="apellido" placeholder="Ingrese aquí su apellido"
                                class="form-control">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <label for="inputEmail3" class="col-sm-12 col-form-label">
                            Teléfono (xxx-xxxx-xxxx):</label>
                        <div class="col-sm-10">
                            <input type="tel" name="telefono" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required
                                title="formato: 123-4567-8901" id="inputEmail3" class="form-control">
                        </div>

                        <label for="inputEmail3" class="col-sm-12 col-form-label">
                            ¿Desea recibir noticias y novedades?</label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="sino" value="si"> si
                        </div>

                        <label for="inputEmail3" class="col-sm-12 col-form-label">
                            Consulta/Pedido:</label>
                        <div class="col-sm-10">
                            <textarea name="mensaje" cols="27" rows="5"></textarea>
                        </div>
                        <!-- botones de enviar y cancelar -->
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Borrar">
                    </div>

                </fieldset>




            </form>

        </div>
    </section>
</main>


<?php

    require_once("../part/footer.php");

?>

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
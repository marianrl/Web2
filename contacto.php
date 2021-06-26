<?php
include_once("config/config.php");
require_once(DIR_BASE."part/head.php");
require_once(DIR_BASE."part/header.php");

require_once(DIR_BASE.'Business/contactBusiness.php');

	if(!empty($_POST['email'])){
		//var_dump($_POST);
		sendMail($_POST);
	}

    ?>

<main>
    <title>Contacto</title>
    <section>
        <h1 class="conteiner fluid">Contacto</h1>

        <h3>
            <a href="https://www.google.com.ar/maps/@-34.6010516,-58.4287612,15z" target="_blank"><img
                    src="imagenes/mapa.jpeg" alt="mapa" width="1280" height="716"
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
        <form class="form-horizontal" action="" method="post">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="name" placeholder="Nombre" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="email" placeholder="Email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="tel"  placeholder="Teléfono" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name="message"  class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Enviar</button>

        </fieldset>
      </form>
        </div>
    </section>
</main>


<?php
        require_once(DIR_BASE.'part/footer.php');
        require_once(DIR_BASE.'part/java.php');
    ?>
</body>

</html>
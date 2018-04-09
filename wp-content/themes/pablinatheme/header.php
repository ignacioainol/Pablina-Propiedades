<?php 
$get_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117270492-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117270492-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ignacio Cyrax Ainol Rivera">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Pablina Propiedades</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js/pgwslideshow/pgwslideshow.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
    <meta name="google-site-verification" content="IGDB6bCAO5rQUEpXSsSXeOjfLOzYsuqBQ2k7vLB7gDg" />
  </head>
  <body style="padding-bottom: 0 !important;">
    <header>
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Pablina Propiedades</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if(strpos($get_uri, '')){ echo "active";} ?>">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if(strpos($get_uri, 'pablinapropiedades.cl/ventas')){ echo "active";} ?>" href="<?php bloginfo( 'url' );?>/ventas">Ventas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if(strpos($get_uri, 'pablinapropiedades.cl/arriendos')){ echo "active";} ?>" href="<?php bloginfo( 'url' ) ?>/arriendos">Arriendos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#modalContacto">Contáctanos</a>
            </li>
          </ul>
          <!--<form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Ingrese una busqueda" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>-->
        </div>
      </nav>
    </header>


    <!--[MODAL DE CONTACTO]-->
        <div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contáctanos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--[FORM]-->
                <!-- <form action="<? //bloginfo('template_url') ?>/sendmail.php" method="post"> -->
                <form action="/formulario-contacto/#wpcf7-f22-p23-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                  <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="22" />
                    <input type="hidden" name="_wpcf7_version" value="5.0.1" />
                    <input type="hidden" name="_wpcf7_locale" value="es_ES" />
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f22-p23-o1" />
                    <input type="hidden" name="_wpcf7_container_post" value="23" />
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tu nombre:</label>
                    <!-- <input type="text" class="form-control" id="name" name="name"> -->
                    <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" />
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Tu email:</label>
                    <!-- <input type="email" class="form-control" id="email" name="email"> -->
                    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" />
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Cuentanos en que podemos ayudarte:</label>
                    <!-- <textarea class="form-control" id="message" name="message"></textarea> -->
                    <textarea name="your-message" cols="20" rows="5" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false"></textarea>

                  </div>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
                  <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn btn-primary" />
                  <span class="ajax-loader"></span>
                  <div class="wpcf7-response-output wpcf7-display-none"></div>
                </div>
              </form>
              <!--[/FORM]-->
            </div>
          </div>
        </div>
    <!--[/MODAL DE CONTACTO]-->


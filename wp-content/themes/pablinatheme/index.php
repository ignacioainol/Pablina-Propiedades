<?php query_posts( array(
   'posts_per_page' => 10,
)); ?>



<?php get_header(); ?>
    <main role="main">

      <!--[CARRUSEL]-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner">

          <div class="carousel-item active">
            <img class="first-slide blurImg" src="<?php bloginfo('template_url')?>/img/concepcion-sanpedro.jpg" alt="Concepcion">
            <div class="container">
              <div class="carousel-caption text-left">
                <!--[LOGO]-->
                <div style="background:url(<?php bloginfo('template_url')?>/img/logo.png);" class="logoPablina"></div>
                <!--[/LOGO]-->
                <h1>Pablina Propiedades.</h1>
                <p>¿Que tal?. Somos una corredora de propiedades de la octava región del Bio-bio. ¿Vendes, arriendas una propiedad?, pues ... </p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button" data-toggle="modal" data-target="#modalContacto">Contáctanos!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide blurImg" src="<?php bloginfo('template_url')?>/img/conce-noche.jpg" alt="Conce Noche">
            <div class="container">
              <div class="carousel-caption">
                <h1>Eficacia, rapidéz y dedicación</h1>
                <p>Estas tres palabras definen la forma en la que nos comprometémos a trabajar, para la necesidad que tengas se agilice lo antes posible.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button" data-toggle="modal" data-target="#modalContacto">Contáctanos!</a></p>
              </div>
            </div>
          </div>

        </div>
        <!--[/CARRUSEL]-->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--[/CARRUSEL]-->

      
      <!--[ULTIMAS PUBLICACIONES OWL CARRUSEL]-->

      <div class="container-fluid contenedor-owl">
        <div class="container">
          <h2 style="text-align: center;margin-bottom: 20px;">Publicaciones Recientes</h2>
          <div class="owl-carousel owl-theme">

            <? if(have_posts()) : while(have_posts()) : the_post(); ?>
              <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <? $valor = get_post_meta( get_the_ID(), 'valor', TRUE ); ?>
              <? $tipoinmueble = get_post_meta($post->ID,'tipo_inmueble',true); ?>
              <? $comuna = get_post_meta($post->ID, 'comuna', true); ?>
              <? global $wp_query;
               $category = get_the_category( $post->ID ); ?>

              <div class="item postReciente">
                <div style="background: url(<?= $urlImage ?>);" class="imagePost"></div>
                  <div class="lastPost" style="padding: 18px;">
                      <p class="typeOfLast"><span class="typeOfTransaction"><?=  $category[0]->cat_name; ?></span>  <span class="type_type"><?= ucfirst($tipoinmueble) ?></span></p>
                      <p class="allBarra"><span>$ <?= $valor ?></span></p>
                      <a href="<?= the_permalink() ?>" style="width: 100%;" class="btn btn-info text-center">Ver Propiedad</a>
                      <p class="postComunne"><?= $comuna ?></p>
                  </div>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>
      <!--[/ULTIMAS PUBLICACIONES OWL CARRUSEL]-->


      <div class="container marketing">
        <h2 style="text-align: center;margin-bottom: 20px;">Team</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row personalPabline">
          <!--[WAKOLDA]-->
          <div class="col-md-4 offset-md-1">
            <div class="rounded-circle imgPersonal" style="background:url(<?php bloginfo('template_url') ?>/img/katherinne.png);"></div>
  
            <h5>Katherine Ainol Rivera</h5>
            <p>Dedicada a la captación y venta de propiedades, responsable del control de gestión y estudio de mercado para entregar una completa asesoría a nuestros clientes. </p>
            <p><strong>Contacto: </strong>
            kainol@pablinapropiedades.cl
            Móvil +569-54244030</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <!--[/WAKOLDA]-->

          <!--[MARIANA]-->
          <div class="col-md-4 offset-md-2">
            <div class="rounded-circle imgPersonal" style="background:url(<?php bloginfo('template_url') ?>/img/mariana.png);"></div>
            <h5>Mariana Navarrete López</h5>
            <p>Encargada de post venta, recopilación de antecedentes, entrega oportuna y eficiente de la información y responsable de la entrega de la propiedad.</p>
            <p><strong>Contacto: </strong>
mnavarrete@pablinapropiedades.cl
Móvil +569-78543641</p>
            <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
          </div><!-- /.col-lg-4 -->
          <!--[/MARIANA]-->

        </div>


      </div><!-- /.container -->

<?php get_footer(); ?>
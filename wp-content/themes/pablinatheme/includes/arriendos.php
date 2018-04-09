<?
global $post;
$args = array( 'numberposts' => 10, 'category_name' => 'arriendo' );
$posts = get_posts( $args );

 ?>

<div class="container postVentas">
	<h2 style="text-align: center;">Propiedades en Arriendo</h2>

          <div class="row">
          	<? foreach ($posts as $post) : setup_postdata($post); ?>
            <div class="col-md-4">
              <? $urlImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <div class="card mb-4 box-shadow">
                <!-- <img class="card-img-top" data-src="" alt="Card image cap"> -->
                <div style="background-image: url(<?= $urlImage?>);" class="imagePost"></div>
                <div class="card-body">
                  <p class="card-text"><? the_title(); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!-- <button type="button" class="btn btn-primary">Ver Propiedad</button> -->
                      <a href="<?= the_permalink() ?>" class="btn btn-primary">Ver Propiedad</a>
                    </div>
                    <small class="text-muted"><?= get_the_date() ?></small>
                  </div>
                </div>
              </div>
            </div>
            <? endforeach ?>
        </div>
    </div>
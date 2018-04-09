<? get_header() ?>

<style>
	.pgwSlideshow ul {
	padding-left: 0 !important;
	}
</style>

<div class="container infoAllPost" style="margin-top: 100px;">
	<h2 class="detailProperty"><span class="logocasa"><i class="fas fa-home"></i></span>  Informacíon de la Propiedad</h2>

	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
		<? $tipoinmueble = ucfirst(get_post_meta($post->ID,'tipo_inmueble',true)); ?>
		<div class="col-sm-12 col-md-5 infoCorredor">
			<p><b>Corredora: </b><?= get_the_author('name') ?> - <?= get_the_author_meta('user_email') ?> - <? if(get_the_author('name') == "Katherine Ainol Rivera"){ echo "+569-54244030";} ?></p>
			
			<table class="table">
			  <tbody>
			    <tr>
			      <td><b>Dirección </b></td>
			      <td><?= the_title() ?></td>
			    </tr>
			    <tr>
			      <td><b>Comuna </b></td>
			      <td><?= get_post_meta($post->ID,'comuna',true); ?></td>
			    </tr>
			    <tr>
			      <td><b>Tipo </b></td>
			      <td><?= $tipoinmueble ?></td>
			    </tr>

			    <tr>
			      <td><b>Dormitorios </b></td>
			      <td><?= get_post_meta($post->ID,'dormitorios',true);  ?></td>
			    </tr>

			    <tr>
			      <td><b>Baños </b></td>
			      <td><?= get_post_meta($post->ID,'banios',true);  ?></td>
			    </tr>
				
				<? $valorest = get_post_meta($post->ID,'estacionamientos',true); ?>
			    <? if($valorest != ""): ?>
			    <tr>
			      <td><b>Estacionamientos </b></td>
			      <td><?= get_post_meta($post->ID,'estacionamientos',true);  ?></td>
			    </tr>
				<? endif ?>
			    <tr>
			      <td><b>Operación </b></td>
			      <td><?= get_the_category()[0]->name ?></td>
			    </tr>
			    <tr>
			      <td><b>Valor</b></td>
			      <td>$ <?= get_post_meta($post->ID,'valor', true) ?> .-</td>
			    </tr>
			  </tbody>
			</table>
			
			<div class="descripcion" style="margin: 30px 0px;">
				<h4>Descripción</h4>
				<div>
					<?
						$gallery = get_post_gallery();
            			$content = strip_shortcode_gallery( get_the_content() );
					 ?>
					<?= $content; ?>
				</div>
			</div>
		</div>

		<div class="col-md-1"></div>

		<div class="col-sm-12 col-md-6 infoOther" style="padding-bottom: 30px">
			<? $gallery = get_post_gallery_images() ?>
			<ul class="pgwSlideshow">
				<? foreach($gallery as $imagen): ?>
					<li><img src="<?= $imagen ?>" alt=""></li>
				<? endforeach ?>
			</ul>
		</div>
		<?php endwhile; ?>
	</div>
</div>

<? get_footer() ?>
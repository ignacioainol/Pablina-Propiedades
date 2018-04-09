<?php
/*
Plugin Name: Meta of Property
Plugin URI: 
Description: Plugin desarrollado para agregar Metabox a las entradas de cada propierdad en veta/arriendo
Version: 4.0.2
Author: Ignacio Cyrax Ainol Rivera
Author URI: 
License: GPLv2 or later
Text Domain: Meta-Property
*/


function add_metaboxes(){
	add_meta_box('metabox_property-id','Propiedades de la Vivienda','ig_diseno_metaboxes','post','normal','high',null);
}


function save_metaboxes($post_id,$post, $update){
	if(!isset($_POST['meta-box-nonce']) || !wp_verify_nonce($_POST['meta-box-nonce'], basename(__FILE__)))
		return $post_id;

	if(!current_user_can('edit_post',$post_id))
		return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
		return $post_id;

	$dormitorios = "";
	$banios = "";
	$estacionamientos = "";
	$comuna = "";
	$ciudad = "";
	$valor = "";
	$mts = "";
	$tipo_inmueble = "";

	if(isset($_POST['dormitorios'])){
		$dormitorios = $_POST['dormitorios'];
	}
	update_post_meta($post_id,'dormitorios', $dormitorios);

	if(isset($_POST['banios'])){
		$banios = $_POST['banios'];
	}
	update_post_meta($post_id,'banios', $banios);

	if(isset($_POST['estacionamientos'])){
		$estacionamientos = $_POST['estacionamientos'];
	}
	update_post_meta($post_id,'estacionamientos', $estacionamientos);

	if(isset($_POST['comuna'])){
		$comuna = $_POST['comuna'];
	}
	update_post_meta($post_id,'comuna', $comuna);


	if(isset($_POST['ciudad'])){
		$ciudad = $_POST['ciudad'];
	}
	update_post_meta($post_id,'ciudad', $ciudad);

	if(isset($_POST['valor'])){
		$valor = $_POST['valor'];
	}
	update_post_meta($post_id,'valor', $valor);

	if(isset($_POST['mts'])){
		$mts = $_POST['mts'];
	}
	update_post_meta($post_id,'mts', $mts);

	if(isset($_POST['tipo_inmueble'])){
		$tipo_inmueble = $_POST['tipo_inmueble'];
	}
	update_post_meta($post_id,'tipo_inmueble', $tipo_inmueble);

}

add_action('save_post','save_metaboxes',10,3);

add_action('add_meta_boxes','add_metaboxes');

function ig_diseno_metaboxes($post){
	wp_nonce_field(basename(__FILE__),'meta-box-nonce');

	?>

	<div>
		<table>
			<tr>
				<td><label for="dormitorios" type><strong>Cantidad Dormitorios </strong></label></td>

				<td><label for="banios" type><strong>Cantidad Baños </strong></label></td>

				<td><label for="estacionamientos" type><strong>Estacionamientos </strong></label></td>

				<td><label for="comuna"><strong>Indique comuna</strong></label></td>
			</tr>

			<tr>
				<td><input type="number" name="dormitorios" value="<?php echo get_post_meta($post->ID,'dormitorios',true); ?>"></td>

				<td><input type="number" name="banios" value="<?php echo get_post_meta($post->ID,'banios', true); ?>"></td>

				<td><input type="number" name="estacionamientos" value="<?php echo get_post_meta($post->ID,'estacionamientos',true); ?>"></td>

				<td><input type="text" name="comuna" value="<?php echo get_post_meta($post->ID,'comuna',true); ?>"></td>
			</tr>
			
			<tr>

				<td><label for="ciudad"><strong>Indique ciudad</strong></label></td>

				<td><label for="valor"><strong>Valor en CLP</strong></label></td>

				<td><label for="mts"><strong>Metros Cuadrados</strong></label></td>

				<td><label for="tipo_inmueble"><strong>Tipo de Inmueble</strong></label></td>

			</tr>

			<tr>

				<td><input type="text" name="ciudad" value="<?php echo get_post_meta($post->ID,'ciudad',true); ?>"></td>

				<td><input type="text" name="valor" value="<?php echo get_post_meta($post->ID,'valor',true); ?>"></td>

				<td><input type="number" name="mts" value="<?php echo get_post_meta($post->ID,'mts',true); ?>"></td>

				<td>
					<select name="tipo_inmueble" id="tipo_inmueble">
						<? $tipoinmueble = get_post_meta($post->ID,'tipo_inmueble',true); ?>
					
						<option  value="<?= $tipoinmueble ?>"><?= ucfirst($tipoinmueble) ?></option>

						<?php if($tipoinmueble == "casa"): ?>
							<option style="display: none" value="casa">Casa</option>
						<?php else: ?>
							<option value="casa">Casa</option>
						<?php endif ?>

						<?php if($tipoinmueble == "departamento"): ?>
							<option style="display: none" value="departamento">Departamento</option>
						<?php else: ?>
							<option value="departamento">Departamento</option>
						<?php endif ?>

						<?php if($tipoinmueble == "oficina"): ?>
							<option style="display: none" value="oficina">Oficina</option>
						<?php else: ?>
							<option value="oficina">Oficina</option>
						<?php endif ?>

						<?php if($tipoinmueble == "sitio"): ?>
							<option style="display: none" value="sitio">Sitio</option>
						<?php else: ?>
							<option value="sitio">Sitio</option>
						<?php endif ?>

					</select></td>
			</tr>
			
		</table>

	</div>
	<?php
}
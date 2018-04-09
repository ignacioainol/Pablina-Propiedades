<?php
$get_uri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$catPost = get_posts(get_cat_ID("ventas"));
 ?>
<?php get_header(); ?>

<?php 
if(strpos($get_uri, '/ventas')){
	require_once 'includes/ventas.php';
}else if(strpos($get_uri, '/arriendos')){
	require_once 'includes/arriendos.php';
}
 ?>

<?php get_footer(); ?>

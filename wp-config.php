<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cpa39857_pablina_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'cpa39857_ignacio');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', ''); //password delete to upload to git

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'EqW*2=H5,nzffY`x<|!i$zLxhDS*R/^ln}E`Cs5VCvkd9]Q8 `$hU!3b t&X]4.C');
define('SECURE_AUTH_KEY', 'NVv#CgRfw|H1Vvf`av.cW,[u[FWqa0250Jk##3#1h_Cg&9C[uG7o+.CKddr-ut97');
define('LOGGED_IN_KEY', '9{;)DC~ &3%]e*N]+s1FBRC>bZ+@8s9{90,Z5{tTDcO-~>H|.r~0$a0FH=$`d 1f');
define('NONCE_KEY', '3IIRo)9&=W85-yO<NlR9oNE#9+^@Ec9^Cj1?z&HeIFSh>Qur&Ua0@<Hm{fAAo{~*');
define('AUTH_SALT', '1|$zNE=b/9vNr]2SguU_oh<Fq`W.;}uo5FW%lfyDJylLD:hUi<*X;0TIgU1!^/f/');
define('SECURE_AUTH_SALT', '-uCG]*K:!Jr1iN3ilO?FKs3?C`7qi>2;szw0U/Iz.I?nxU4{Q64@oF0#(M`gJ0!J');
define('LOGGED_IN_SALT', 'a~.tJ92mvWV)m2!Gs0={rlH4Arj4N6tZR*UJP?57`qs4Ub[,#26j0P-=DML1lz;{');
define('NONCE_SALT', 'Ar{0.%WZoVi:  8uA7%ltk>zE$^UGn:-,A4IG0A<0 kqpT6reI4a8x6.U9~aRM`M');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


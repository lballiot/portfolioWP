<?php 
// permet la prise en charge des images en avant.
add_theme_support( 'post-thumbnails' );

// permet la prise en charge des extraits.
add_post_type_support( 'projet', 'excerpt' );

/**
 * File d'attente des scripts et des styles.
 */
function load_script(){
	// wp_enqueue_script() permettent de charger un script.
	wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/app.js', array(), '', true );
}

// File d'attente des styles et des scripts
add_action( 'wp_enqueue_scripts', 'load_script');

/**
* permet la prise en charge d'un logo personnalisé.
* @link https://developer.wordpress.org/themes/functionality/custom-logo/
*/
add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 250,
	'flex-width'  => true,
	'flex-height' => true,
	)
);

/**
* permet la prise en charge de menus.
* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
*/
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' )
			)
		);
	}
add_action( 'init', 'register_my_menus' );

?>
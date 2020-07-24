<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );
function sf_child_theme_dequeue_style() {
	wp_dequeue_style( 'storefront-style' );
	wp_dequeue_style( 'storefront-woocommerce-style' );
	// Load Bootstrap
	wp_enqueue_style( 'bootstrap-css',  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), false, true);
	//Load Owl Carroussel2
	//wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, false);
	//wp_enqueue_style( 'owl-carroussel-css',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	//wp_enqueue_script('owl-carroussel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery-js'), false, false);
	// Include Fonts
	//wp_enqueue_style('Poppins', 'http://localhost/wordpress/wp-content/themes/oceanwp-child-theme/Fonts/Poppins-Regular.tff');
	//wp_enqueue_style('Poppins', 'http://localhost/wordpress/wp-content/themes/oceanwp-child-theme/Fonts/Poppins-Medium.tff');
		
}
add_action('wp_enqueue_scripts', 'sf_child_theme_dequeue_style');

function ws_register_images_field() {
	register_rest_field( 
		'post',
		'images',
		array(
				'get_callback'    => 'ws_get_images_urls',
				'update_callback' => null,
				'schema'          => null,
		)
	);
}
add_action( 'rest_api_init', 'ws_register_images_field' );

function ws_get_images_urls( $object, $field_name, $request ) {
	$medium = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'medium' );
	$medium_url = $medium['0'];

	$large = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'large' );
	$large_url = $large['0'];

	return array(
		'medium' => $medium_url,
		'large'  => $large_url,
	);
}

function js_for_loops() {
  if (is_page ('794')) { 
		wp_enqueue_script('loop_posts', '/wp-content/themes/oceanwp-child-theme-master/loop.js', '', '', true);
  }
}
add_action('wp_head', 'js_for_loops');

function js_for_home() {
  if (is_page ('755')) { 
		wp_enqueue_script('home_posts', '/wp-content/themes/oceanwp-child-theme-master/home.js', '', '', true);
  }
}
add_action('wp_head', 'js_for_home');

function js_for_blog() {
  if (is_page ('772')) { 
		wp_enqueue_script('blog_posts', '/wp-content/themes/oceanwp-child-theme-master/blog.js', '', '', true);
  }
}
add_action('wp_head', 'js_for_blog');
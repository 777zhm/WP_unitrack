<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => 'Main menu',
		'lang_menu' => 'Language menu',
		'footer_menu_1' => 'Footer menu 1',
		'footer_menu_2' => 'Footer menu 2'
	) );
});

function template_url( $pass ){
	echo get_template_directory_uri().'/'.$pass;
}


function assets_url( $pass ){
	echo get_template_directory_uri().'/assets/'.$pass;
}

/*
 * Enqueue theme scripts and styles.
 */
function unitrack_scripts() {
	// Styles
	wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '4.2.1' );
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/js/owl/owl.carousel.css' );
	wp_enqueue_style( 'owl-carousel-theme-style', get_template_directory_uri().'/assets/js/owl/owl.theme.css' );
	wp_enqueue_style( 'owl-carousel-transitions-style', get_template_directory_uri().'/assets/js/owl/owl.transitions.css' );

	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	// Scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(), '1.14.6', true );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array(), '4.2.1', true );

	wp_enqueue_script('owl-carousel-js', get_template_directory_uri()."/assets/js/owl/owl.carousel.min.js", array('jquery'), '', true );

	wp_enqueue_script('main_js', get_template_directory_uri()."/assets/js/script.js", array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'unitrack_scripts' );


/**
 * Add integrity/crossorigin for CDN theme styles.
 */
function unitrack_style_loader_tag( $html, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'bootstrap-style',
			( 'integrity' ) => 'sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS',
		),
		array(
			( 'name' )      => 'fontawesome-style',
			( 'integrity' ) => 'sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP',
		)
	);
	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
	if ( $key !== false ) {
		$html = str_replace( '/>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\' />', $html );
	}
	return $html;
}
add_filter( 'style_loader_tag', 'unitrack_style_loader_tag', 10, 2 );

/**
 * Add integrity/crossorigin for CDN theme scripts.
 */
function unitrack_script_loader_tag( $tag, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'jquery',
			( 'integrity' ) => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
		),
		array(
			( 'name' )      => 'popper-js',
			( 'integrity' ) => 'sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut',
		),
		array(
			( 'name' )      => 'bootstrap-js',
			( 'integrity' ) => 'sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k',
		)
	);
	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
	if ( $key !== false ) {
		$tag = str_replace( '></script>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\'></script>', $tag );
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'unitrack_script_loader_tag', 10, 2 );

if( function_exists('acf_add_options_page') ){
	$parent = acf_add_options_page(array(
		'page_title'    => 'Theme settings',
		'menu_title'    => 'Theme settings',
		'redirect'      => false,
		'menu_slug'     => 'theme-settings',
		'post_id' => 'theme_settings',
		'capability' => 'edit_posts',
		'position' => 30,
	));
}

include_once 'includes/acf_reg_blocks.php';

?>
<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function isst_project_scripts() {
	wp_enqueue_style( 'isst_project-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'isst_bootstrap-style', get_template_directory_uri(). '/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'isst_awesome-style', get_template_directory_uri(). '/font-awesome/css/all.css', array(), _S_VERSION );

	wp_enqueue_script( 'isst_project-jquery', get_template_directory_uri() . '/jquery/jquery-3.5.1.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'isst_project-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'isst_project-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'isst_project_scripts' );

function isst_project_setup() {
	
	
    add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'isst_project' ),
		)
	);

	
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'isst_project_setup' );
function isst_project_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'isst_project' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'isst_project' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Banner', 'isst_project' ),
			'id'            => 'Banner',
			'description'   => esc_html__( 'Add widgets here.', 'isst_project' ),
			
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'mark', 'isst_project' ),
			'id'            => 'mark',
			'description'   => esc_html__( 'Add widgets here.', 'isst_project' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'youtube', 'isst_project' ),
			'id'            => 'youtube',
			'description'   => esc_html__( 'Add widgets here.', 'isst_project' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'isst_project_widgets_init' );

?>
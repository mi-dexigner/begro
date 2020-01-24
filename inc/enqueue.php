<?php
/*
	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/
function mi_load_scripts(){
	 global $is_IE;
	 wp_enqueue_style( 'style', THEMEROOT . '/style.css', array(), wp_get_theme()->Version, 'all' );
	 wp_enqueue_style( 'style-dynamic', THEMEROOT . '/css/style_dynamic.php', array(), wp_get_theme()->Version, 'all' );

	 wp_deregister_style( 'kc-icon-1-css' );

	wp_register_script( 'base-layout-js' , SCRIPTS . 'base-layout.js', false, wp_get_theme()->Version, true );
	wp_enqueue_script( 'base-layout-js' );

	wp_enqueue_script( 'greensock-TweenMax', SCRIPTS . 'greensock/TweenMax.min.js', array('jquery'), wp_get_theme()->Version, true );
	wp_enqueue_script( "begro", SCRIPTS . 'mi.js', array('jquery'), wp_get_theme()->Version, true );

	wp_enqueue_script( 'begro-skip-link-focus-fix', SCRIPTS . 'skip-link-focus-fix.js', array(), wp_get_theme()->Version, true );
	wp_enqueue_script(
		'begro-menu-arrow-nav',
		SCRIPTS . 'navigation.js', array('jquery'), wp_get_theme()->Version, true);
	wp_enqueue_script( 'ajax-form', SCRIPTS . 'ajax-form.js', array('jquery'), wp_get_theme()->Version, true );
	wp_enqueue_script( 'main', SCRIPTS . 'main.js', array('jquery'), wp_get_theme()->Version, true );

	wp_localize_script( 'ajax-form', 'theme', array('url' => home_url(),'themeUrl' => get_template_directory_uri(),'ajaxurl' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'mi_load_scripts',  100);

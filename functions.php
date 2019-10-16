<?php
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'ROOT', THEMEROOT . '/' );
define( 'STYLES', ROOT . 'css/');
define( 'IMAGES', ROOT . 'img/' );
define( 'SCRIPTS', ROOT . 'js/' );
define('FRAMEWORK', get_template_directory(). '/inc/');
define('THEMENAME',wp_get_theme());

require_once FRAMEWORK . 'vendor/Mobile_Detect.php';
require_once FRAMEWORK . 'enqueue.php';
require_once FRAMEWORK . 'theme-support.php';
require_once FRAMEWORK . 'class-bootstrap-four-navwalker.php';
require_once FRAMEWORK . 'class-tgm-plugin-activation.php';
require_once FRAMEWORK . 'schema.php';
require FRAMEWORK . 'template-tags.php';
require_once FRAMEWORK . 'sidebar.php' ;
require_once FRAMEWORK .'customizer.php';
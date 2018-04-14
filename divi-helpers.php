<?php
/*
Plugin Name: DIVI Helpers
Version: 1.0.1
Plugin URI: https://github.com/davidsword/divi-extension
Description: A helpful add on for Wordpress's divi theme and divi-builder plugin that adds in CSS classes, few PHP functions, a library of prebuilt templates, and some reference documentation.
Author: davidsword
Author URI: https://davidsword.ca/
*/

// Security
defined( 'ABSPATH' ) || exit;

// REMOVE PROJECTS
add_action( 'admin_menu', function () {
	remove_menu_page('edit.php?post_type=project');
});
add_action('init',function (){
	unregister_post_type( 'project' );
});

// ADD CSS & JS
add_action( "wp_footer", function(){

	wp_enqueue_style(
		'divi-helpers',
		plugins_url( 'divi-helpers.css',  __FILE__  ),
		array(),
		false
	);

	wp_enqueue_script(
		'divi-helpers',
		plugins_url( 'divi-helpers.js',  __FILE__  ),
		['jquery'],
		false,
		true
	);

});

?>

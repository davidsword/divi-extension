<?php
/*
Plugin Name: DIVI Extension
Version: 1.0.1
Plugin URI: https://github.com/davidsword/divi-extension
Description: A helpful add on for Wordpress's divi theme and divi-builder plugin that adds in CSS classes, few PHP functions, a library of prebuilt templates, and some reference documentation.
Author: davidsword
Author URI: https://davidsword.ca/
*/

add_action( 'admin_menu', function () {
	remove_menu_page('edit.php?post_type=project');
} );


add_action('wp_footer','roidivi_copyright_fix',99999);
function roidivi_copyright_fix() {
	?>
	<script>
	jQuery(window).ready(function() {
		if (jQuery('#footer-info').length > 0) {
		var currentTime = new Date();
		jQuery('#footer-info').html( jQuery('#footer-info').html().replace('%%YEAR%%',currentTime.getFullYear()) );
		}
	});

	<?php if (is_404()) : ?>

	jQuery(window).ready(function() {
		var currentTime = new Date()
		jQuery('article .entry h1').html("ERROR 404 - Page Not Found");
	});

	<?php endif; ?>

	</script>
	<?php
}


add_action( "wp_footer", function(){
	wp_enqueue_style(
		'divi-extension',
		plugins_url( 'divi-extension.css',  __FILE__  ),
		array(),
		false
	);
});

?>

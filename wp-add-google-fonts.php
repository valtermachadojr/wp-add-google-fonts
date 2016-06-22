<?php
/*
Plugin Name: [Simple Wordpress Plugin] Add Google Fonts
Plugin URI: https://github.com/valtermachadojr/wp-add-google-fonts
Description: This is a simple test. This plugin will give access to those Google Fonts and you can use them in your stylesheet.
Version: 0.1
Author: Valter Machado Jr
Author URI: http://valtermachadojr.com.br
*/

function add_google_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googlpeapis.com/css?family=Lato:400,900|Roboto');
	wp_enqueue_style('googleFonts');	
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

?>

<?php

/**
 * Plugin Name: Custom WP Login
 * Version: 0.1
 * Author: Richard Tuttle
 * License: GPL2+
 * Text Domain: cwpl
 */

/**
 * Load custom stylesheet
 *
 */
add_action('login_enqueue_scripts', 'cwpl_login_stylesheet');
function cwpl_login_stylesheet() {
	// load stylesheet
	wp_enqueue_style('cwpl-custom-stylesheet', plugin_dir_url(__FILE__) . 'login_styles.css');
}


/**
 * Custom error message returned
 *
 */
add_filter('login_errors', 'cwpl_error_message');
function cwpl_error_message() {
	return "Well, that was not it!";	
}

/**
 * Elimiate the error shake effect
 *
 */
add_action('login_head', 'cwpl_remove_shake');
function cwpl_remove_shake() {
	remove_action('login_head', 'wp_shake_js', 12);
}


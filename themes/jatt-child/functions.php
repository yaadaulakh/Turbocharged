<?php
/**
 * jatt_child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jatt_child
 * @since jatt_child 1.0
 */

 function child_enqueue_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts');

function enqueue_logged_in_styles() {
    if (is_user_logged_in()) {
        wp_enqueue_style('logged-in-css', get_stylesheet_directory_uri() . '/yaad.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_logged_in_styles');
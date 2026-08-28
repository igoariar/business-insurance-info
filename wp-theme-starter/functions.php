<?php
/**
 * wp-theme-starter functions
 */

function biinfo_enqueue_styles() {
    wp_enqueue_style('biinfo-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'biinfo_enqueue_styles');

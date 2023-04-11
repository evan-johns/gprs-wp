<?php

function gprs_enqueue_styles() {
    wp_enqueue_script('gprs-js', get_theme_file_uri('/js/gprs.js'), array('jquery'), '1.0', true);
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'gprs_enqueue_styles' );

?>
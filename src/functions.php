<?php
    add_action('wp_enqueue_scripts', 'pg_scripts');

    function pg_scripts() {
        wp_enqueue_style('pg-style', get_stylesheet_uri());
        wp_enqueue_script('pg-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    };
 
    add_theme_support( 'post-thumbnails' );
?>
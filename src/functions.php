<?php
    add_action('wp_enqueue_scripts', 'pg_scripts');

    function pg_scripts() {
        wp_enqueue_style('pg-style', get_stylesheet_uri());
        wp_enqueue_script('pg-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
        wp_enqueue_script('pg-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    };
 
    add_theme_support( 'post-thumbnails' );
    
    // Меню

    add_theme_support( 'menus' );

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'btn';
            
            if ( $item->current ) {
                $atts['class'] = 'btn btn_color';
            }
        }
        return $atts;
    }
?>
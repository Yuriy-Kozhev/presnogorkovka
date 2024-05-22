<?php
    add_action( 'wp_enqueue_scripts', 'pg_scripts' );

    function pg_scripts() {
        wp_enqueue_style( 'pg-style', get_stylesheet_uri() );
        wp_enqueue_script( 'pg-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
        wp_enqueue_script( 'pg-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'filter', get_template_directory_uri() . '/assets/js/filter.js', array('jquery'), null, true );
        wp_localize_script( 'filter', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
        wp_enqueue_script( 'my_loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), null, true );
        wp_localize_script( 'my_loadmore', 'loadmore_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    };
 
    add_theme_support( 'post-thumbnails' );
    
    // Меню

    add_theme_support( 'menus' );

    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );
    
    function filter_nav_menu_link_attributes( $atts, $item, $args ) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'btn';
            
            if ($item->current) {
                $atts['class'] = 'btn btn_color';
            }
            
            if ($item->ID === 50 && in_category('creativity') ) {
                $atts['class'] = 'btn btn_color';
            }
        }
        return $atts;
    }

    // Фильтр рубрик

    add_action( 'wp_ajax_myfilter', 'true_filter_function' ); 
    add_action( 'wp_ajax_nopriv_myfilter', 'true_filter_function' );
    
    function true_filter_function() {
    
        $args = array(
            'orderby' => 'date',
            'order'	=> $_POST[ 'date' ]
        );
    
        if( isset( $_POST[ 'categoryfilter' ] ) ) {
            $args[ 'tax_query' ] = array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $_POST[ 'categoryfilter' ]
                )
            );
        }
    
        query_posts( $args );
    
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                
                get_template_part( 'post-creative' );
            
            endwhile;
            
        } else {
            echo 'Ничего не найдено';
        }
    
        die();
    }

    // Подгрузка постов кнопкой LoadMore

    add_action( 'wp_ajax_loadmore', 'my_loadmore' );
    add_action( 'wp_ajax_nopriv_loadmore', 'my_loadmore' );

    function my_loadmore() {
 
        $paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
        $paged++;
     
        $args = array(
            'paged' => $paged,
            'post_status' => 'publish'
        );
     
        query_posts( $args );
    
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                
                get_template_part( 'post-creative' );
            
            endwhile;
            
        } else {
            echo 'Ничего не найдено';
        }
     
        die();
     
    }

?>
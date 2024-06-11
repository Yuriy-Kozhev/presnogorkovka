<?php
    add_action( 'wp_enqueue_scripts', 'pg_scripts' );

    function pg_scripts() {
        wp_enqueue_style( 'pg-style', get_stylesheet_uri() );
        wp_enqueue_script( 'pg-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
        wp_enqueue_script( 'pg-script-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'filter', get_template_directory_uri() . '/assets/js/filter.js', array('jquery'), null, true );
        wp_localize_script( 'filter', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    };
 
    add_theme_support( 'post-thumbnails' );
    
    // Отключение верхней админ-панели на фронтенде

    add_filter( 'show_admin_bar', '__return_false' );

    // Удаление ненужных виджетов из Консоли WordPress

    add_action( 'wp_dashboard_setup', 'clear_wp_dash' );
    function clear_wp_dash() {
        $dash_side   = & $GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
        
        unset( $dash_side['dashboard_primary'] );           // Блог WordPress
        unset( $dash_side['dashboard_secondary'] );         // Другие Новости WordPress
        remove_action( 'welcome_panel', 'wp_welcome_panel' ); // Удаление виджета "Добро пожаловать"
    }

    // Удаление лишних элементов профиля

    add_action('admin_head','hide_personal_options');
    function hide_personal_options() {
        $delete = array(
            "tr.user-admin-color-wrap", // Цветовая схема
            "tr.user-comment-shortcuts-wrap", // Горячие клавиши
            "tr.user-language-wrap", // Основной язык сайта
            "tr.user-rich-editing-wrap", // Визуальный редактор
            "tr.user-syntax-highlighting-wrap", // Подсветка синтаксиса
            "tr.user-admin-bar-front-wrap", // Верхняя панель
            "tr.user-profile-picture", // Граватар
            "tr.ratings-row", // Рейтинги аватара
            "#application-passwords-section", // Пароли приложений
            "#footer-thankyou", // Спасибо от WP
        );
        $selectors = implode(", ", $delete);
        echo "<style>{$selectors}{display:none;}</style>";
    }

    // Меню

    add_theme_support( 'menus' );

    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3 );
    
    function filter_nav_menu_link_attributes( $atts, $item, $args ) {
        if ($args->menu === 'Main' || $args->menu === 'Creative' || $args->menu === 'Footer') {
            $atts['class'] = 'btn';
            
            if ($item->current) {
                $atts['class'] = 'btn btn_color';
            }
            
            if ($item->ID === 50 && in_category( ['33', '5', '18', '6', '10', '21', '4', '9', '7', '22'] ) && !in_category( ['2', '35', '39', '3', '43', '37', '41', '20'] ) ) {
                $atts['class'] = 'btn btn_color';
            }
        }
        return $atts;
    }

    // Удаление блока автора WP-Recall (выводится в другом месте через шорткод)

    function otfm_remove_author_block(){
        if(!is_admin()){
            remove_filter('the_content', 'rcl_author_info', 70);
        }
    }
    add_action('wp','otfm_remove_author_block');

    // Отключаем стандартный вывод лайков (рейтинг) WP-Recall

    function remove_filter_post_rayt() {
        if(is_single()){
            remove_filter('the_content', 'rcl_post_content_rating', 10);
        }
    }
    add_action('wp','remove_filter_post_rayt');

    // Удаление даты регистрации, кол-ва коментов, публикаций из блока автора внизу поста

    remove_action('rcl_user_description','rcl_user_comments',20);
    remove_action('rcl_user_description','rcl_user_posts',20);
    remove_action('rcl_user_description','rcl_user_register',20);

    // Добавление чата в блок автора

    function chat_to_author() {
        global $rcl_user;
        $chat_btn = rcl_format_url(get_author_posts_url($rcl_user->ID),'chat');
        echo '<a href="' . $chat_btn . '" class="btn">Сообщение</a>';  
    }
    add_action('rcl_user_description', 'chat_to_author', 30);

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
                
                get_template_part( 'content-creative' );
            
            endwhile;
            
        } else {
            echo 'Ничего не найдено';
        }
    
        die();
    }

?>
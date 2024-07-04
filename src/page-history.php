<?php
/*
Template Name: Шаблон для страницы История
*/
?>

<?php 
get_header(); 
?>

<div class="container">
	<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
</div>

<section class="creative">
    <div class="container">
        
        <h2 class="title">Пресногорьковке – 271 год!</h2>
        
        <div class="post-prev__wrapper mt-20">

        <?php
            $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

            $args = array(
                'cat'         => '6', /* Рубрика: История */
                'posts_per_page' => 6,
                'paged'          => $current_page,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { 
                    $query->the_post();
                    get_template_part( 'template-parts/content-creative' );
                }
                wp_reset_postdata();
            }
        ?>

        </div>

        <?php echo do_shortcode('[ajax_load_more category="historical" button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?>
        
    </div>
</section>

<section class="people">
    <div class="container">
        <a href="people" class="title-wrap">
            <h2 class="title title_link">История в лицах</h2>
        </a>
        <div class="people__wrapper">
            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница
                $args = array(
                    'cat' => 5, /* Рубрика: Биографии */
                    'posts_per_page' => 8,
                    'paged'          => $current_page,
                    'orderby'     => 'rand',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
        
                        get_template_part( 'template-parts/content-people' );
                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
        
        <a href="people" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие пресногорьковцы</a>
        
        <div class="divider"></div>
    </div>
</section>

<?php
get_footer();
?>
<?php
/*
Template Name: Люди
*/
?>

<?php 
get_header(); 
?>

<div class="container">
	<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
</div>

<div class="creative">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>

        <!-- Шаблон вывода постов -->

        <div class="people__wrapper">
            
            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница
                $args = array(
                    'cat' => 5, /* Рубрика: Биографии */
                    'posts_per_page' => -1,
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

        <!-- Кнопка LoadMore -->

        <!-- <?php echo do_shortcode('[ajax_load_more category="biography" button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?> -->
        
        <div class="divider"></div>
    </div>
</div>

<?php
get_footer();
?>
<?php
/*
Template Name: Шаблон страницы Новости
*/
?>

<?php 
get_header(); 
?>

<div class="creative">
    <div class="container">
        <h1 class="title">Что происходит</h1>
        
        <!-- Шаблон вывода постов -->

        <div class="post-prev__wrapper mt-10">
            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

				$args = array(
                    'cat' => 20,
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
						get_template_part( 'template-parts/content-news' );
					}
					wp_reset_postdata();
                }

            ?>

        </div>

        <!-- Кнопка LoadMore -->

        <?php echo do_shortcode('[ajax_load_more category="news" button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?>
        
        <div class="divider"></div>
    </div>
</div>

<?php
get_footer();
?>
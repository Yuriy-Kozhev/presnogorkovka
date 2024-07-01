
<?php
/*
Template Name: Аккаунт WP-Recall
*/
?>

<?php 
    get_header();
?>

<?php 
    if ( is_user_logged_in() ) { ?>
	    <div class="container">
            <?php global $user_LK; ?> 

            <h1 class="autor__name"><?php the_author_meta( 'display_name', $user_LK ); ?></h1>
            <p class="autor__bio"><?php the_author_meta( 'user_description', $user_LK ); ?></p>
        </div>
    <?php
    }
?>

<div class="container">
    <?php echo do_shortcode('[wp-recall]'); ?>
</div>

<div class="creative">
    <div class="container">

        <?php // Выводим заголовок если есть посты
            $posts = count_user_posts( $user_LK );
            if( $posts > 0 ) {
                echo '<h2 class="title">Публикации автора</h2>';
            }
        ?>

        <div class="post-prev__wrapper mt-40">

            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

                $args = array(
                    'author'      => $user_LK,
                    'cat'         => -20, // Исключаем новости
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

        <?php 
            if( $query->have_posts() ) {
                echo do_shortcode('[ajax_load_more author="'.$user_LK.'" category__not_in="20" button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="100" pause="true" scroll="false" offset="6"]');
            } 
        ?>
        
        <div class="divider"></div>
    </div>

</div>

<?php
    get_footer();
?>
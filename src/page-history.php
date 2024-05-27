<?php
/*
Template Name: Шаблон для страницы История
*/
?>

<?php 
get_header(); 
?>

<section class="photo">
    <div class="container">
        <a href="photo">
            <h2 class="title title_link title_mt30">Фотографии</h2>
        </a>
        <div class="photo__wrapper mt-10">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/uchilische.jpg" alt="" class="photo__item">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/hram-1909.jpg" alt="" class="photo__item">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/mahov-i-krikunov-1916.jpg" alt="" class="photo__item">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/hram.jpg" alt="" class="photo__item">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/shkola-fizkabinet-1950.jpg" alt="" class="photo__item">
        </div>
        <a href="photo" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие фотографии</a>
    </div>
</section>

<section class="people">
    <div class="container">
        <a href="people">
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
    </div>
</section>

<section class="creative">
    <div class="container">
        <a href="<?php echo get_category_link( 6 ); ?>">
            <h2 class="title title_link">Интересно об истории села</h2>
        </a>
        <div class="post-prev__wrapper mt-10">

        <?php
            $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

            $args = array(
                'cat'         => '6, 8', /* Рубрики: История, Статьи */
                'posts_per_page' => 6,
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
                    get_template_part( 'template-parts/content-creative' );
                }
                wp_reset_postdata();
            }
        ?>

        </div>

        <a href="<?php echo get_category_link( 6 ); ?>" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие тексты</a>
        <div class="divider"></div>
    </div>
</section>

<?php
get_footer();
?>
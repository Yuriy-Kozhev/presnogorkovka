<?php
/*
Template Name: Страница результатов поиска
*/
?>

<?php 
    get_header();
?>

<div class="container">
    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <p class="search-result">
                <?php
                printf( esc_html__( '%s упоминается в этих публикациях:', 'presnogorkovka' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </p>
        </header>

        <div class="post-prev__wrapper mt-40">
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content-creative', 'search' );
            endwhile; ?>
        </div>

        <?php

    else : ?>

        <p class="search-result">Ничего не найдено... Попробуйте изменить слово или фразу для поиска</p>

    <?php
    endif;
    ?>
        
    <div class="divider"></div>

</div>


<?php
    get_footer();
?>
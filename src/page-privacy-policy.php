<?php
/*
Template Name: Политика конфиденциальности
*/
?>

<?php 
get_header(); 
?>

<div class="container">

    <h1 class="title">Политика конфиденциальности</h1>

    <?php 
        if ( have_posts() ) { 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        }
    ?>

    <div class="divider"></div>
</div>

<?php
get_footer();
?>
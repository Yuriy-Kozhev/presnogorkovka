<?php
/*
Template Name: Пользователи WP-Recall
*/
?>

<?php 
    get_header();
?>

<div class="container">
    <h2 class="title">Авторы</h2>
    <?php echo do_shortcode('[userlist userlist usergroup="wp_capabilities:author" orderby="posts_count" template="cards" data="rating_total,comments_count,posts_count,description" search_form="0" order="DESC"]'); ?>
    
    <h2 class="title">Все пользователи</h2>
    <?php echo do_shortcode('[userlist inpage="40" orderby="time_action" template="cards" data="rating_total,comments_count,posts_count,description" filters="1" order="DESC"]'); ?>

    <div class="divider"></div>
</div>

<?php
    get_footer();
?>
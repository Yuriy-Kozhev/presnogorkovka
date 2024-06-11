<?php
/*
Template Name: Пользователи WP-Recall
*/
?>

<?php 
    get_header();
?>

<div class="container">
    <?php echo do_shortcode('[userlist inpage="40" orderby="time_action" template="cards" data="rating_total,comments_count,posts_count,description" filters="1" order="DESC"]'); ?>

    <div class="divider"></div>
</div>

<?php
    get_footer();
?>
<?php
/*
Template Name: Лента новостей WP-Recall
*/
?>

<?php 
    get_header();
?>

<div class="container">
    <?php echo do_shortcode('[feed]'); ?>
    <div class="divider"></div>
</div>

<?php
    get_footer();
?>
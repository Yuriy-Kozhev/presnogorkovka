
<div class="people__item">

    <a href="<?php echo get_permalink(); ?>">
        <img class="people__img" src="<?php the_post_thumbnail_url(); ?>">
    </a>

    <div class="people__descr">
        <div class="people__family"><?php the_field('surname'); ?></div>
        <div class="people__name"><?php the_field('name'); ?></div>
        <div class="people__years"><?php the_field('years'); ?></div>
    </div>
</div>

    

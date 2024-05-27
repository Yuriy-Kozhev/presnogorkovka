
<div class="people__item">
    <a href="<?php echo get_permalink(); ?>" >    
        <?php
            $image = get_field('post_img');
            $photo = get_field('bio_img');
            if( !empty( $image ) ): ?>
                <img
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo $image['alt']; ?>"
                    class="people__img"
                />
            <?php
            elseif( !empty( $photo ) ): ?>
                <img
                    src="<?php echo $photo['url']; ?>"
                    alt="<?php echo $photo['alt']; ?>"
                    class="people__img"
                />
        <?php
            endif;
        ?>
    </a>

    <div class="people__descr">
            <div class="people__family"><?php the_field('surname'); ?></div>
            <div class="people__name"><?php the_field('name'); ?></div>
            <div class="people__years"><?php the_field('years'); ?></div>
    </div>
</div>

    

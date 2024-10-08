<div class="post-poem">
                
    <img class="post-prev__img" src="<?php the_post_thumbnail_url(); ?>">
    
    <div class="post-prev__content">

        <?php $author_id = get_the_author_meta( 'ID' ); ?> <!-- Получаем в переменную данные автора -->

        <?php /* На странице автора ставим дату вместо автора */
            if ( rcl_is_office() ) { ?>
                <div class="post__date"><?php the_date( 'j F Y' ); ?></div>
                <?php
            } elseif ( is_category('20') ) { ?>
                <div class="post__date"><?php the_date( 'j F Y' ); ?></div>
                <?php    
            } else { ?>
                <a href="<?php echo get_author_posts_url( $author_id ); ?>" class="post-prev__autor"><?php the_author(); ?></a>
                <?php
            }
        ?>

        <div class="post-prev__title"><?php the_title(); ?></div>
        <a href="<?php echo get_permalink(); ?>">
            <div class="post-prev__text"><?php the_excerpt(); ?></div>
        </a>
    </div>
    
    <div class="post-prev__bottom">
        
        <?php
            if ( is_category(['news', 'photo']) ) { ?>
                <a class="btn" href="<?php echo get_permalink(); ?>">Смотреть</a>
                <?php    
            } else { ?>
                <a class="btn" href="<?php echo get_permalink(); ?>">Читать</a>
                <?php
            }
        ?>
    
        <div class="post-prev__reactions">

            <!-- Лайки -->
            <a aria-label="Оценки" href="<?php echo get_permalink(); ?>">
                <div class="post-prev__likes">
                    <i class="rcli fa-solid fa-heart" aria-hidden="true" title="Сначала прочитай :)"></i>
                    <div class="post-prev__likes-count"><?php echo rcl_get_total_rating($post->ID,'post'); ?></div>
                </div>
            </a>

            <!-- Комменты -->
            <a aria-label="Комментарии" href="<?php comments_link(); ?>" class="post-prev__comments">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                    fill="none">
                    <g clip-path="url(#clip0_432_656)">
                        <path
                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                            fill="#272727" />
                    </g>
                    <defs>
                        <clipPath>
                            <rect width="25" height="25" fill="white"
                                transform="translate(0.628418 0.5)" />
                        </clipPath>
                    </defs>
                </svg>
                <div class="post-prev__comments-count"><?php comments_number( '0', '1', '%'); ?></div>
            </a>
        </div>
    </div>

</div>
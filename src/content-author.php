<div class="autor">
    <div class="container">

        <?php $author_id = get_the_author_meta( 'ID' ); ?>

        <h1 class="autor__name"><?php the_author(); ?></h1>
    
        <img src="<?php echo get_avatar_url( $author_id, array( 'size' => '265' ) ); ?>" alt="Аватар" class="autor__avatar">
        <p class="autor__bio"><?php echo get_the_author_meta( 'user_description' ); ?></p>
        
        <!-- <div class="autor__actions">
            <div class="post__likes">
                <button aria-label="Лайк">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                        <g clip-path="url(#clip0_432_652)">
                            <path
                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                fill="#272727" />
                        </g>
                        <defs>
                            <clipPath id="clip0_432_652">
                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <div class="post__likes-count">300</div>
            </div>
            <button class="btn">подписаться на автора</button>
            <button class="btn">написать сообщение</button>
        </div> -->

        <div class="divider-birds">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/birds-on-wires.svg" alt="">
        </div>
        
    </div>
</div>

<div class="creative">
    <div class="container">
        <div class="post-prev__wrapper mt-40">

            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

                $args = array(
                    'author'      => $author_id,
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
        
        <!-- Кнопка LoadMore -->

        <?php echo do_shortcode('[ajax_load_more author="'.$author_id.'" category__not_in="20" button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?>
        
        <div class="divider"></div>
    </div>
</div>
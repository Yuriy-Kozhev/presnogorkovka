<?php
/*
Template Name: Творчество
*/
?>

<?php get_header();?>

    <div class="creative">
        <div class="container">
            <h1 class="title">Творчество пресногорьковцев</h1>

            <div class="creative__tags">
                <a href="#" class="btn">рассказы</a>
                <a href="#" class="btn">очерки</a>
                <a href="#" class="btn">миниатюры</a>
                <a href="#" class="btn">статьи</a>
                <a href="#" class="btn">стихи</a>
                <a href="#" class="btn">юмор</a>
                <a href="#" class="btn">история</a>
                <a href="#" class="btn">биографии</a>
            </div>

            <?php
                echo '<form action="" method="POST" id="filter">';

                $terms = get_terms( array( 
                    'taxonomy' => 'category', 
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'exclude' => '12', 
                ) );

                if ($terms) {
                    echo '<select name="categoryfilter"><option>Выберите категорию</option>';
                    foreach ($terms as $term) {
                        echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                    }
                    echo '</select>';
                }
                
                echo '<button>Применить фильтр</button><input type="hidden" name="action" value="myfilter"></form>'
            ?>
            
            <div class="post-prev__wrapper mt-40" id="response">

                <?php
                    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $wp_query = new WP_Query( array(
                        'posts_per_page' => 6,
                        'paged'          => $paged,
                        'category_name'    => 'creativity',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    
                    if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        
                        <div class="post-prev">
                            
                            <?php 
                                $image = get_field('post_img');
                                $photo = get_field('bio_img');
                                if( !empty( $image ) ): ?>
                                    <img 
                                        src="<?php echo $image['url']; ?>"   
                                        alt="<?php echo $image['alt']; ?>"
                                        class="post-prev__img"   
                                    />
                                <?php
                                elseif( !empty( $photo ) ): ?>
                                    <img 
                                        src="<?php echo $photo['url']; ?>"   
                                        alt="<?php echo $photo['alt']; ?>" 
                                        class="post-prev__img"  
                                    />
                            <?php 
                                endif; 
                            ?>
                            
                            <div class="post-prev__content">
                                <a href="autor.html" class="post-prev__autor"><?php the_author(); ?></a>
                                <div class="post-prev__title"><?php the_title(); ?></div>
                                <div class="post-prev__text"><?php the_excerpt(); ?></div>
                            </div>
                            
                            <div class="post-prev__bottom">
                                <a class="btn" href="#">Читать</a>
                                <div class="post-prev__reactions">
                                    <div class="post-prev__likes">
                                        <button aria-label="Лайк">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                                fill="none">
                                                <g clip-path="url(#clip0_432_652)">
                                                    <path
                                                        d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                        fill="#272727" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <div class="post-prev__likes-count">20</div>
                                    </div>
                                    <a aria-label="Комментарии" href="#" class="post-prev__comments">
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
                                        <div class="post-prev__comments-count">5</div>
                                    </a>
                                </div>
                            </div>

                        </div>

                    <?php endwhile;

                    wp_reset_postdata();

                    endif;
                ?>
            
            </div>

            <?php echo do_shortcode('[ajax_load_more button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?>
            
            <div class="divider"></div>
        </div>
    </div>

<?php get_footer();?>
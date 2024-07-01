<?php get_header();?>

    <section class="photo">
        <div class="container">
            
            <a href="<?php echo get_category_link(24); ?>" class="title-wrap">
                <h2 class="title title_link">В объективе времени</h2>
            </a>
            
            <div class="history-slider">
                <?php
                echo do_shortcode('[xo_slider id="466"]');
                ?>
            </div>
            
            <a href="<?php echo get_category_link(24); ?>" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">смотреть фотографии</a>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <a href="<?php echo get_category_link(20); ?>" class="title-wrap">
                <h2 class="title title_link">Что происходит</h2>
            </a>

            <div class="post-prev__wrapper mt-10">
                <?php
                    $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

                    $args = array(
                        'cat' => 20,
                        'posts_per_page' => 3,
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
                            get_template_part( 'template-parts/content-news' );
                        }
                        wp_reset_postdata();
                    }

                ?>

            </div>

            <a href="<?php echo get_category_link(20); ?>" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие события</a>
        </div>
    </section>

    <section class="creative">
        <div class="container">
            <a href="creative" class="title-wrap">
                <h2 class="title title_link">Творчество пресногорьковцев</h2>
            </a>
            <div class="post-prev__wrapper mt-10">

            <?php
                $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

				$args = array(
					'cat'         => '-20, -5', 
					'posts_per_page' => 6,
                    'paged'          => $current_page,
                    'orderby'     => 'rand',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
				);

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { 
						$query->the_post();

                        if( !is_sticky() ) { // Исключаем закреплённый пост
						    get_template_part( 'template-parts/content-creative' );
                        }
					}
					wp_reset_postdata();
                }
            ?>

            </div>

            <a href="creative" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другое творчество</a>
        </div>
    </section>

    <section class="people">
        <div class="container">
            <a href="people" class="title-wrap">
                <h2 class="title title_link">История в лицах</h2>
            </a>

            <div class="people__wrapper">

                <?php
                    $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // Текущая страница

                    $args = array(
                        'cat' => 5,
                        'posts_per_page' => 8,
                        'paged'          => $current_page,
                        'orderby'     => 'rand',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) { 
                            $query->the_post();
                            
                            get_template_part( 'template-parts/content-people' );    
                        }
                        wp_reset_postdata();
                    }

                ?>

            </div>

            <a href="people" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие пресногорьковцы</a>
        </div>
    </section>

    <!-- <section class="forum">
        <div class="container">
            <a href="#" class="title-wrap">
                <h2 class="title title_link">Форум</h2>
            </a>

            <div class="forum__wrapper">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/gallery/shkola-fizkabinet-1950.jpg" alt="Физкабинет 1950 г." class="forum__img">
                </a>
                <div class="forum__content">
                    <div class="forum__descr">Общаемся на разные темы</div>
                    <a href="#" class="btn forum-btn">Вход</a>
                </div>
            </div>
        </div>
    </section> -->

    <section class="map">
        <div class="container">
            <h2 class="title">Мы здесь</h2>
            <div class="map__script">
                <script async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af8e3f877ea0f62aca1a17d5a212d3b64ef7b07b1b7bf7ba192272b56f56addbd&amp;width=1120&amp;height=500&amp;lang=ru_RU&amp;scroll=false">
                    </script>
            </div>
        </div>
    </section>

<?php get_footer();?>    
<?php get_header();?>

    <section class="photo">
        <div class="container">
            
            <a href="<?php echo get_category_link(24); ?>" class="title-wrap">
                <h2 class="title title_link">В объективе времени</h2>
            </a>
            
            <div class="history-slides">
                <div class="history-slider">
                    <?php
                    echo do_shortcode('[smartslider3 slider="2"]');
                    ?>
                </div>

                <!-- <div class="history-slider">
                    <?php
                    echo do_shortcode('[smartslider3 slider="3"]');
                    ?>
                    <div class="history-slider__descr">
                        <div class="history-slider__text">
                            Продолжается сбор пожертвований на восстановление колокольни Свято-Никольского Храма
                        </div>
                        <div class="history-slider__wa animate__tada wow" data-wow-duration="2s"
                            data-wow-delay="0.5s" data-wow-iteration="10">
                            <a href="https://wa.me/+77711354527">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" viewBox="0 0 50 58"
                                    fill="none">
                                    <path
                                        d="M42.5112 10.8372C37.8348 6.14966 31.6071 3.57153 24.9888 3.57153C11.3281 3.57153 0.212054 14.6876 0.212054 28.3483C0.212054 32.7122 1.35045 36.9756 3.51562 40.7367L0 53.5715L13.1362 50.1229C16.7522 52.0983 20.8259 53.1363 24.9777 53.1363H24.9888C38.6384 53.1363 50 42.0202 50 28.3595C50 21.7412 47.1875 15.5247 42.5112 10.8372ZM24.9888 48.9622C21.2835 48.9622 17.6562 47.9689 14.4978 46.0939L13.75 45.6474L5.95982 47.6898L8.03571 40.0894L7.54464 39.3081C5.47991 36.0269 4.39732 32.2434 4.39732 28.3483C4.39732 16.9979 13.6384 7.7568 25 7.7568C30.5022 7.7568 35.6696 9.89966 39.5536 13.7947C43.4375 17.6898 45.8259 22.8572 45.8147 28.3595C45.8147 39.7211 36.3393 48.9622 24.9888 48.9622ZM36.2835 33.5381C35.6696 33.2256 32.6228 31.73 32.0536 31.5291C31.4844 31.3171 31.0714 31.2166 30.6585 31.8416C30.2455 32.4666 29.0625 33.8506 28.6942 34.2747C28.3371 34.6876 27.9688 34.7434 27.3549 34.4309C23.7165 32.6117 21.3281 31.1831 18.9286 27.0648C18.2924 25.9711 19.5647 26.0492 20.7478 23.6831C20.9487 23.2702 20.8482 22.9131 20.692 22.6006C20.5357 22.2881 19.2969 19.2412 18.7835 18.0023C18.2812 16.797 17.7679 16.9644 17.3884 16.9421C17.0312 16.9197 16.6183 16.9197 16.2054 16.9197C15.7924 16.9197 15.1228 17.076 14.5536 17.6898C13.9844 18.3148 12.3884 19.8104 12.3884 22.8572C12.3884 25.9041 14.6094 28.8506 14.9107 29.2635C15.2232 29.6764 19.2746 35.9264 25.4911 38.6162C29.4196 40.3126 30.9598 40.4577 32.9241 40.1675C34.1183 39.9889 36.5848 38.672 37.0982 37.2211C37.6116 35.7702 37.6116 34.5314 37.4554 34.2747C37.3103 33.9956 36.8973 33.8394 36.2835 33.5381Z"
                                        fill="#F1EDE3" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div> -->
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

    <section class="forum">
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
    </section>

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
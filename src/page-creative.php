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

            <!-- Фильтр по рубрикам -->

            <!-- <?php
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
            ?> -->
            
            <!-- Шаблон вывода постов -->

            <div class="post-prev__wrapper mt-40" id="response">
                <?php
                    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1; // Текущая страница
                    
                    $query = new WP_Query( array(
                        'posts_per_page' => 6,
                        'paged'          => $paged,
                        'cat'    => '-1, -20',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    
                    if ( $query->have_posts() ) { 
                        while ( $query->have_posts() ) { 
                            $query->the_post();
                            get_template_part( 'post-creative' );
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>

            <!-- Кнопка LoadMore -->

            <?php
                $max_pages = $query->max_num_pages;
                if( $paged < $max_pages ) {
                    echo '<a href="#" id="loadmore" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '"><button class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">загрузить ещё</button></a>';
                }
            ?>

            <!-- <?php echo do_shortcode('[ajax_load_more button_label="Загрузить ещё" button_done_label="На сегодня это всё" post_type="post" posts_per_page="6" transition_delay="200" pause="true" scroll="false" offset="6"]'); ?> -->
            
            <div class="divider"></div>
        </div>
    </div>

<?php get_footer();?>
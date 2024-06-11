<!-- Контент отдельного поста категории Фото -->

<div class="divider-birds">
    <img src="<?php echo bloginfo('template_url');?>/assets/img/birds-on-wires.svg" alt="">
</div>

<div class="container">

	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php $author_id = get_the_author_meta( 'ID' ); ?> <!-- Получаем в переменную данные автора -->

		<div class="post__autor">
			<?php
			if( !in_category( 20 ) ) { ?> <!-- Если не новости -->
				<a href="<?php echo get_author_posts_url( $author_id ); ?>"><?php the_author(); ?></a>
			<?php
			} ?>
		</div>

		<h1 class="post__title"><?php the_title(); ?></h1>

        <div class="entry-content mt-30">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'presnogorkovka' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'presnogorkovka' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>

        <div class="container_post">

			<div class="post__date mt-30"><?php the_date( 'j F Y' ); ?></div>

			<div class="post__actions mt-30">
				
				<!-- Лайки -->

				<div class="post__likes">		
					<?php echo rcl_get_html_post_rating($post->ID,$post->post_type); ?>	
				</div>

				<?php
				if( !in_category( 20 ) ) { ?>
					<!-- <button class="btn post__actions-subscribe">подписаться на автора</button> -->
				<?php
				} ?>

				<button class="btn">поделиться с друзьями</button>
			</div>

			<!-- Навигация -->

			<div class="post__navigation">
				<?php
				
					if( get_adjacent_post(true, '6', true) ) {
						previous_post_link('Cмотрите также: %link', '%title', true, '6');
					}
					else {
						$last = new WP_Query('posts_per_page=1&order=DESC');
						$last->the_post();
					
						echo '<a href="' . get_permalink() . '" class="btn">Другие фотографии</a>';
					
						wp_reset_postdata();
					}
				
				?>
			</div>	

			<!-- Автор публикации -->

			<?php echo rcl_get_author_block(); ?>

		</div>

		<!-- Комментарии -->

		<div class="post__comment mt-40">
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>

		<div class="divider"></div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>	
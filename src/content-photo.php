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

			<div class="post__actions mt-30">
				<div class="post__likes">
					<button aria-label="Лайк">
						<svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
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
					<div class="post__likes-count">0</div>
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
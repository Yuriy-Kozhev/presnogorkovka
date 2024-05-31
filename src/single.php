<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if( in_category( 24 ) ) { /* Если рубрика: photo */
				get_template_part( 'template-parts/content-photo', get_post_type() );
			} else {
				get_template_part( 'template-parts/content', get_post_type() );
			}

		endwhile;
		?>

	</main><!-- #main -->

<?php
get_footer();
?>
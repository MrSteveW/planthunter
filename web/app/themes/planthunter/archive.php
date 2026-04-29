<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package planthunter
 */

get_header();
?>

	<main id="primary" class="site-main<?php echo is_post_type_archive( 'houseplants' ) ? ' has-banner' : ''; ?>">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_post_type_archive( 'houseplants' ) ) : ?>
			<section class="houseplant-archive-banner" style="background-image: url('<?php echo wp_get_attachment_image_url( 37, 'full' ); ?>');">
			</section>
			<?php endif; ?>

			<div class="houseplant-archive-grid">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/archive/content', get_post_type() );

			endwhile;
			?>
			</div>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();

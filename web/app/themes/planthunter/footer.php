<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package planthunter
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			printf( esc_html__( 'Designed by %s'), '<a href="https://stevewilliams.dev/">Steve Williams</a>' );
			?>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( '%s' ), '<a href="https://github.com/MrSteveW/planthunter">Github repo</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

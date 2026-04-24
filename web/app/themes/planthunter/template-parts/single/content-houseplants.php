<article>
    <h1><?php the_title(); ?></h1>
    <p><?php echo get_field('latin_name'); ?></p>
    <p><?php echo get_field('common_name'); ?></p>
    <?php echo wp_get_attachment_image(get_field('image'), 'full'); ?>
</article>
<article>
    <section class="houseplant-single-banner" style="background-image: url('<?php echo wp_get_attachment_image_url( 37, 'full' ); ?>');">
    </section>

    <section class="houseplant-single-details">
        <div class="houseplant-single-image"><?php the_post_thumbnail( 'full' ); ?></div>
        <div>
            <h1><?php the_title(); ?></h1>
            <p>Steveee</p>
            <p><?php echo get_field('latin_name'); ?></p>
            <p><?php echo get_field('common_name'); ?></p>
        </div>
    </section>
    
</article>
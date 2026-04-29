<a href="<?php the_permalink(); ?>">
<article class="plant-card" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>');">
    <div class="plant-card__overlay">
        <h2 class="plant-card__title">
            <?php the_title(); ?>
        </h2>
    </div>
</article>
</a>
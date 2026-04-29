<?php get_header(); ?>

<main class="front-page">
    
    <section class="splash" style="background-image: url('<?php echo wp_get_attachment_image_url( 28, 'full' ); ?>');">
    <div class="splash-contents">
    <div><h1>Choose the right houseplant for you</h1></div>
    <div><a href="<?php echo esc_url( home_url( '/houseplants' ) ); ?>" class="planthunter-link">Hunt houseplants</a></div>
    </div>
    
    </section>

  <section class="featured-plants">
    <?php echo do_shortcode('[metaslider id="20"]'); ?>
  </section>

</main>

<?php get_footer(); ?>
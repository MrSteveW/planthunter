<?php get_header(); ?>

<main class="front-page">
    
    <section class="splash" style="background-image: url('<?php echo wp_get_attachment_image_url( 13, 'full' ); ?>');">
    <h1>Choose the right houseplant for you</h1>
    </section>

  <section class="featured-plants">
    <?php echo do_shortcode('[metaslider id="20"]'); ?>
  </section>

</main>

<?php get_footer(); ?>
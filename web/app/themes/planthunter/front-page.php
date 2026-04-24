<?php get_header(); ?>

<main class="home">
    
    <section class="splash" style="background-image: url('<?php echo wp_get_attachment_image_url( 16, 'full' ); ?>');">
    <h1>Choose the right houseplant for you</h1>
    </section>

  <section class="featured-plants">
    <?php
    $plants = new WP_Query([
      'post_type'      => 'houseplants',
      'posts_per_page' => 3,
    ]);
    while ($plants->have_posts()) : $plants->the_post();
      // render a plant card
    endwhile;
    wp_reset_postdata();
    ?>
  </section>

</main>

<?php get_footer(); ?>
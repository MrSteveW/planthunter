<article class="plant-card">

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="plant-card__image">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
    <?php endif; ?>

    <div class="plant-card__body">

        <h2 class="plant-card__title">
            <h3>Only archive</h3>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <?php if ( $latin = get_field('latin_name') ) : ?>
            <p class="plant-card__latin"><?php echo esc_html( $latin ); ?></p>
        <?php endif; ?>

        <?php if ( $common = get_field('common_name') ) : ?>
            <p class="plant-card__common"><?php echo esc_html( $common ); ?></p>
        <?php endif; ?>

        <?php if ( $position = get_field('position') ) : ?>
            <p class="plant-card__position"><?php echo esc_html( $position ); ?></p>
        <?php endif; ?>

        <a class="plant-card__link" href="<?php the_permalink(); ?>">
            View plant
        </a>

    </div>

</article>
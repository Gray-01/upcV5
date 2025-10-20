<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (in_category('pilgrimage')) : ?>
        <section class="pilgrimage-single">
          <div class="container">

            <h1 class="pilgrimage-single__title"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
              <div class="pilgrimage-single__image-wrapper">
                <?php the_post_thumbnail('large', ['class' => 'pilgrimage-single__image']); ?>
              </div>
            <?php endif; ?>

            <div class="pilgrimage-single__content">
              <?php the_content(); ?>
            </div>

          </div>
        </section>
    <?php else : ?>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>

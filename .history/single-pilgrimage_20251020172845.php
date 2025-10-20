<?php
get_header(); ?>

<section class="pilgrimage-single">
  <div class="container">

    <h1 class="pilgrimage-single__title"><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()) : ?>
      <div class="pilgrimage-single__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'pilgrimage-single__image']); ?>
      </div>
    <?php endif; ?>

    <div class="pilgrimage-single__content">
      <?php
      while (have_posts()) : the_post();
          the_content();
      endwhile;
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>

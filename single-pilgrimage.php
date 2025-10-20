<?php
get_header();
?>

<section class="pilgrimage-single">
  <div class="container">

    <?php
    // Цикл WordPress для текущей записи
    while (have_posts()) : the_post();
    ?>

      <!-- Заголовок записи -->
      <h1 class="pilgrimage-single__title"><?php the_title(); ?></h1>

      <!-- Изображение записи -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="pilgrimage-single__image-wrapper">
          <?php the_post_thumbnail('large', ['class' => 'pilgrimage-single__image']); ?>
        </div>
      <?php endif; ?>

      <!-- Контент записи -->
      <div class="pilgrimage-single__content">
        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>

  </div>
</section>

<?php get_footer(); ?>

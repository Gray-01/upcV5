<?php
/*
Template Name: Новини
*/
get_header();
?>

<section class="news">
  <div class="container">

    <?php if (get_field('news_title')): ?>
      <h1 class="news__title">
        <?php the_field('news_title'); ?>
      </h1>
    <?php endif; ?>

    <?php if (get_field('news_subtitle')): ?>
      <h2 class="news__subtitle">
        <?php the_field('news_subtitle'); ?>
      </h2>
    <?php endif; ?>

    <?php if (get_field('news_text')): ?>
      <div class="news__wrapper">
        <?php the_field('news_text'); ?>
      </div>
    <?php endif; ?>

    <?php
      $image = get_field('news_image');
      if ($image):
    ?>
      <div class="news__image-wrapper">
        <img
          class="news__img"
          src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>">
      </div>
    <?php endif; ?>

  </div>
</section>

<?php

get_footer();
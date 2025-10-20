<?php
/*
Template Name: Гора Афон
*/

get_header(); ?>

<section class="pilgrimage-single">
  <div class="container">

    <!-- Заголовок страницы -->
    <h1 class="pilgrimage-single__title"><?php the_title(); ?></h1>

    <!-- Картинка записи (Featured Image) -->
    <?php if (has_post_thumbnail()) : ?>
      <div class="pilgrimage-single__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'pilgrimage-single__image']); ?>
      </div>
    <?php endif; ?>

    <!-- Контент страницы из редактора WP -->
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

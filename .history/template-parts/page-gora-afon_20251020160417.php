<?php
/*
Template Name: Гора Афон
*/

get_header(); ?>

<section class="pilgrimage-single">
  <div class="container">

    <!-- Заголовок страницы -->
    <h1 class="pilgrimage-single__title"><?php the_title(); ?></h1>

    <!-- Контент страницы -->
    <div class="pilgrimage-single__content">
      <?php
      while (have_posts()) : the_post();
          the_content(); // выводим текст и медиа из редактора страницы
      endwhile;
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>

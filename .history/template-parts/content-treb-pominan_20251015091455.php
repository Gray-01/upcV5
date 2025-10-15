<?php
/*
 * Template Name: Замовлення треб та поминань
 */
get_header(); ?>

<section class="treb-pominan">
  <!-- Заголовки -->
  <h1><?php the_field('treb_heading_h1'); ?></h1>
  <h2><?php the_field('treb_heading_h2'); ?></h2>

  <!-- Картинка -->
  <?php
  $image = get_field('treb_image');
  if($image){
      echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'treb-image'));
  }
  ?>

  <!-- Таблица треб -->
  <div class="treb-table">
    <?php the_field('treb_table'); ?>
  </div>

  <!-- Инструкция -->
  <div class="treb-text">
    <?php the_field('treb_instructions'); ?>
  </div>

  <!-- Пример записочки -->
  <div class="example-section">
    <?php
    $example_table = get_field('treb_example');
    if ($example_table) {
        echo apply_filters('the_content', $example_table);
    }
    ?>
  </div>

  <!-- Как подавать записочки -->
  <div class="treb-howto">
    <?php the_field('treb_how_to'); ?>
  </div>
</section>

<?php get_footer(); ?>

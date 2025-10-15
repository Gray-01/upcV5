<?php
/*
 * Template Name: Замовлення треб та поминань
 */
get_header(); ?>

<section class="treb-pominan">
  <h1><?php the_field('treb_title'); // WYSIWYG или текст ?></h1>
  <h2><?php the_field('treb_subtitle'); ?></h2>

  <?php
  // Картинка миниатюры страницы
  $image_id = get_post_thumbnail_id();
  if ($image_id) {
      echo wp_get_attachment_image($image_id, 'full');
  }
  ?>

  <!-- Первая таблица и текст (через WYSIWYG) -->
  <div class="treb-content">
    <?php
    $main_content = get_field('treb_main'); // WYSIWYG поле для основной таблицы и текста
    if( $main_content ) {
        echo wp_kses_post($main_content); // безопасный вывод HTML
    }
    ?>
  </div>

  <!-- Вторая таблица: Приклад записочки (чистый HTML) -->
  <div class="example-section">
    <h3>Наведений приклад записочки:</h3>
    <?php
    $example_table = get_field('treb_example'); // Text Area поле, вставляем чистый HTML
    if( $example_table ) {
        echo $example_table; // напрямую выводим HTML, без wpautop
    }
    ?>
  </div>

  <!-- Остальной текст (WYSIWYG) -->
  <div class="treb-text">
    <?php
    $treb_text = get_field('treb_text'); // WYSIWYG для инструкций и текста
    if( $treb_text ) {
        echo wp_kses_post($treb_text);
    }
    ?>
  </div>

</section>

<?php get_footer(); ?>

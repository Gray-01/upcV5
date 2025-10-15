<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header(); ?>

<section class="psaltyr-akafist">
  <div class="container">

    <?php if( function_exists('get_field') ): ?>

      <?php
      // Заголовок H1
      $main_title = get_field('main_title');
      if( $main_title ) {
          echo '<h1 class="psaltyr__title">' . esc_html( wp_strip_all_tags($main_title) ) . '</h1>';
      }

      // Подзаголовок H2
      $subtitle = get_field('subtitle');
      if( $subtitle ) {
          echo '<h2 class="psaltyr__subtitle">' . esc_html( wp_strip_all_tags($subtitle) ) . '</h2>';
      }

      // Основное изображение
      $main_image = get_field('main_image');
      if( $main_image && isset($main_image['url']) ) {
          echo '<div class="psaltyr__image-wrapper">';
          echo '<img class="psaltyr__image" src="' . esc_url($main_image['url']) . '" alt="' . esc_attr($main_image['alt'] ?? '') . '">';
          echo '</div>';
      }

      // Основной текст (HTML)
      $main_text = get_field('main_text');
      if( $main_text ) {
          echo '<div class="psaltyr-text">';
          echo wp_kses_post($main_text);
          echo '</div>';
      }
      ?>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>

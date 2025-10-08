<?php
/*
Template Name: Новини
*/
get_header();
?>

<main class="page-news" style="min-height: calc(100vh - 200px); padding-top: 100px;">
  <section class="news">
    <div class="container">

      <?php
      // Берём поля ACF (используем get_field — безопасно для проверки)
      $title    = get_field('news_title');
      $subtitle = get_field('news_subtitle');
      $text     = get_field('news_text');
      $image    = get_field('news_image');
      ?>

      <?php if ( $title ): ?>
        <h1 class="news__title"><?php echo wp_kses_post( $title ); ?></h1>
      <?php endif; ?>

      <?php if ( $subtitle ): ?>
        <h2 class="news__subtitle"><?php echo wp_kses_post( $subtitle ); ?></h2>
      <?php endif; ?>

      <?php if ( $text ): ?>
        <div class="news__wrapper"><?php echo wp_kses_post( $text ); ?></div>
      <?php endif; ?>

      <?php
      // Поддерживаем любой формат возврата поля изображения (массив или URL)
      if ( $image ) {
          if ( is_array($image) ) {
              $img_url = $image['url'] ?? '';
              $img_alt = $image['alt'] ?? '';
          } else {
              $img_url = $image;
              $img_alt = '';
          }

          if ( $img_url ) : ?>
            <div class="news__image-wrapper">
              <img class="news__img" src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>">
            </div>
          <?php endif;
      }
      ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>

<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header(); ?>

<section class="psaltyr-akafist">
  <div class="container">

    <?php
    // Основные поля
    $main_title = get_field('main_title');        // H1
    $subtitle = get_field('subtitle');            // H2
    $main_image = get_field('main_image');        // Изображение (Array)
    $main_text = get_field('main_text');          // WYSIWYG текст одним блоком
    ?>

    <?php if ($main_title): ?>
      <h1 class="psaltyr-akafist__title">
        <?php echo wp_kses_post($main_title); ?>
      </h1>
    <?php endif; ?>

    <?php if ($subtitle): ?>
      <h2 class="psaltyr-akafist__subtitle">
        <?php echo wp_kses_post($subtitle); ?>
      </h2>
    <?php endif; ?>

    <?php if ($main_image): ?>
      <div class="psaltyr-akafist__image">
        <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
      </div>
    <?php endif; ?>

    <?php if ($main_text): ?>
      <div class="psaltyr-text">
        <?php echo wp_kses_post($main_text); ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>

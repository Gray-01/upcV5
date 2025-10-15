<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header(); ?>

<section class="psaltyr-akafist">
  <div class="container">

    <?php
    // Основные поля (все — WYSIWYG)
    $main_title = get_field('main_title');        // H1
    $subtitle = get_field('subtitle');            // H2
    $main_image = get_field('main_image');        // Изображение (Array)

    // Текстовые блоки (WYSIWYG)
    $block1 = get_field('block1');
    $block2 = get_field('block2');
    $block3 = get_field('block3');
    $block4 = get_field('block4');
    $block5 = get_field('block5');
    ?>

    <?php if ($main_title): ?>
      <div class="psaltyr-akafist__title">
        <?php echo wp_kses_post($main_title); ?>
      </div>
    <?php endif; ?>

    <?php if ($subtitle): ?>
      <div class="psaltyr-akafist__subtitle">
        <?php echo wp_kses_post($subtitle); ?>
      </div>
    <?php endif; ?>

    <?php if ($main_image): ?>
      <div class="psaltyr-akafist__image">
        <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
      </div>
    <?php endif; ?>

    <div class="psaltyr-text">
      <?php if ($block1) echo wp_kses_post($block1); ?>
      <?php if ($block2) echo wp_kses_post($block2); ?>
      <?php if ($block3) echo wp_kses_post($block3); ?>
      <?php if ($block4) echo wp_kses_post($block4); ?>
      <?php if ($block5) echo wp_kses_post($block5); ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>

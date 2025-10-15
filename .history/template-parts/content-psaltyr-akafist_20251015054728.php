<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header(); ?>

<section class="psaltyr-akafist">
  <div class="container">

    <?php
    // Основные поля ACF
    $main_title = get_field('main_title');          // H1
    $subtitle = get_field('subtitle');              // H2
    $main_image = get_field('main_image');          // Картинка (массив)
    $content_blocks = get_field('content_blocks');  // Повторитель с подзаголовками и текстами
    ?>

    <?php if ($main_title): ?>
      <h1><?php echo esc_html($main_title); ?></h1>
    <?php endif; ?>

    <?php if ($subtitle): ?>
      <h2><?php echo esc_html($subtitle); ?></h2>
    <?php endif; ?>

    <?php if ($main_image): ?>
      <div class="psaltyr-akafist__image">
        <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>">
      </div>
    <?php endif; ?>

    <?php if ($content_blocks): ?>
      <div class="psaltyr-text">
        <?php foreach ($content_blocks as $block): ?>
          <div class="psaltyr-text__block">
            <?php if (!empty($block['subtitle'])): ?>
              <h3><?php echo esc_html($block['subtitle']); ?></h3>
            <?php endif; ?>

            <?php if (!empty($block['text'])): ?>
              <div class="psaltyr-text__content">
                <?php echo wp_kses_post($block['text']); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>

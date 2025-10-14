<?php
/*
Template Name: Покровитель парафії
*/
get_header();
?>

<section class="patron">
  <div class="container">
    <h1 class="patron__title">Покровитель парафії</h1>

    <?php
    // Получаем изображение и текст из ACF
    $image = get_field('patron_image');
    $text  = get_field('patron_text'); // HTML (WYSIWYG)
    // Защита: если поле пустое — подставим текст-заглушку
    if ( ! $text ) {
        $text = '<p>Тут буде розміщено опис покровителя парафії — його життєпис...</p>';
    }

    // Разделим текст на абзацы — простым explode по закрывающему тэгу </p>
    // Сохраняем теги </p> обратно при сборке
    $parts = preg_split('/(<\/p>)/i', $text, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    // Соберём массив полных абзацев: каждый абзац + "</p>"
    $paragraphs = [];
    for ($i = 0; $i < count($parts); $i += 2) {
        $p = isset($parts[$i]) ? $parts[$i] : '';
        $closing = isset($parts[$i+1]) ? $parts[$i+1] : '';
        $full = $p . $closing;
        $full = trim($full);
        if ($full !== '') $paragraphs[] = $full;
    }

    // Первый абзац — в правую колонку; остальные — под картинкой
    $first_para = isset($paragraphs[0]) ? $paragraphs[0] : '';
    $rest_paras = '';
    if (count($paragraphs) > 1) {
        for ($i = 1; $i < count($paragraphs); $i++) {
            $rest_paras .= $paragraphs[$i];
        }
    }
    ?>

    <div class="patron__content">
      <div class="patron__image-wrapper">
        <?php if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: 'Покровитель парафії'); ?>" class="patron__image">
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron.jpg" alt="Покровитель парафії" class="patron__image">
        <?php endif; ?>
      </div>

      <div class="patron__text-right">
        <?php
        // Выводим первый абзац (если он есть). Очищаем безопасно.
        if ($first_para) {
            echo wp_kses_post($first_para);
        } else {
            echo '<p>Короткое описание покровителя.</p>';
        }
        ?>
      </div>
    </div><!-- .patron__content -->

    <?php if ($rest_paras): ?>
      <div class="patron__text-full">
        <?php echo wp_kses_post($rest_paras); ?>
      </div>
    <?php endif; ?>

  </div><!-- .container -->
</section>

<?php get_footer(); ?>

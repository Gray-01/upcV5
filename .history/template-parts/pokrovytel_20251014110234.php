<?php
/*
Template Name: Покровитель парафії
*/
get_header(); ?>

<section class="clergy"> <!-- используем те же классы, что и в рабочем шаблоне -->
  <div class="container">
    <h1 class="clergy__title">
      <?php
      // Заголовок страницы (ACF)
      $title = get_field('patron_page_title');
      if ($title) {
          $allowed_tags = array(
              'strong' => array(),
              'em'     => array(),
              'span'   => array('style' => array(), 'class' => array()),
              'a'      => array('href' => array(), 'target' => array()),
              'br'     => array()
          );
          echo wp_kses($title, $allowed_tags);
      } else {
          echo 'Покровитель парафії';
      }
      ?>
    </h1>

    <div class="clergy__item">
      <div class="clergy__image-wrap">
        <?php
        // Получаем изображение из ACF — поддерживаем ID, array и URL
        $img_field = get_field('patron_image');

        $image_url = '';
        if ($img_field) {
            // если вернулся массив (return format = Array)
            if (is_array($img_field) && isset($img_field['url'])) {
                $image_url = $img_field['url'];
            }
            // если вернулся ID (return format = ID)
            elseif (is_numeric($img_field)) {
                $image_url = wp_get_attachment_image_url((int)$img_field, 'large');
            }
            // если вернулась строка (URL)
            elseif (is_string($img_field)) {
                $image_url = $img_field;
            }
        }

        if ($image_url) {
            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta(is_numeric($img_field) ? (int)$img_field : 0, '_wp_attachment_image_alt', true)) . '" class="clergy__image">';
        } else {
            // Если нет - показываем дефолт
            echo '<img src="' . get_template_directory_uri() . '/assets/img/patron.jpg" alt="Покровитель парафії" class="clergy__image">';
        }
        ?>
      </div>

      <div class="clergy__content">
        <h2 class="clergy__name">
          <?php
          // Опционально: имя / короткий заголовок для правой колонки
          $name = get_field('patron_name');
          if ($name) {
              $allowed_tags = array(
                  'strong' => array(),
                  'em'     => array(),
                  'span'   => array('style' => array(), 'class' => array()),
                  'a'      => array('href' => array(), 'target' => array()),
                  'br'     => array()
              );
              echo wp_kses($name, $allowed_tags);
          }
          ?>
        </h2>

        <div class="clergy__text">
          <?php
          // Основной WYSIWYG-контент (patron_text)
          $patron_text = get_field('patron_text');
          if ($patron_text) {
              // Разрешённые теги — такие же, как у шаблона clergy
              $allowed_tags = array(
                  'p'      => array('class' => array()),
                  'strong' => array(),
                  'em'     => array(),
                  'span'   => array('style' => array(), 'class' => array()),
                  'a'      => array('href' => array(), 'target' => array()),
                  'br'     => array()
              );
              echo wp_kses($patron_text, $allowed_tags);
          } else {
              echo '<p>Тут буде розміщено опис покровителя парафії.</p>';
          }
          ?>
        </div> <!-- .clergy__text -->

      </div> <!-- .clergy__content -->
    </div> <!-- .clergy__item -->
  </div> <!-- .container -->
</section>

<?php get_footer(); ?>

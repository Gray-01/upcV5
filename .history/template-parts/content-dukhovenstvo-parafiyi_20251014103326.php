<?php
/*
Template Name: Духовенство парафії
*/
get_header(); ?>

<section class="clergy">
  <div class="container">
    <h1 class="clergy__title">
      <?php
      $title = get_field('clergy_page_title');
      if ($title) {
          $allowed_tags = array(
              'strong' => array(),
              'em' => array(),
              'span' => array('style' => array(), 'class' => array()),
              'a' => array('href' => array(), 'target' => array()),
              'br' => array()
          );
          echo wp_kses($title, $allowed_tags);
      } else {
          echo 'Духовенство парафії';
      }
      ?>
    </h1>

    <div class="clergy__item">
      <div class="clergy__image-wrap">
        <?php
        $image_id = get_field('content_image');
        if ($image_id) {
            $image_url = wp_get_attachment_image_url($image_id, 'large'); // Изменено на 'large'
            echo '<img src="' . esc_url($image_url) . '" alt="" class="clergy__image">';
        } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/img/vitaliy-gorzov.jpg" alt="" class="clergy__image">';
        }
        ?>
      </div>

      <div class="clergy__content">
        <h2 class="clergy__name">
          <?php
          $name = get_field('clergy_name');
          if ($name) {
              $allowed_tags = array(
                  'strong' => array(),
                  'em' => array(),
                  'span' => array('style' => array(), 'class' => array()),
                  'a' => array('href' => array(), 'target' => array()),
                  'br' => array()
              );
              echo wp_kses($name, $allowed_tags);
          } else {
              echo 'Протоієрей Віталій Горзов';
          }
          ?>
        </h2>

        <p class="clergy__desc">
          <?php
          $description = get_field('clergy_description');
          if ($description) {
              $allowed_tags = array(
                  'strong' => array(),
                  'em' => array(),
                  'span' => array('style' => array(), 'class' => array()),
                  'a' => array('href' => array(), 'target' => array()),
                  'br' => array()
              );
              echo wp_kses($description, $allowed_tags);
          } else {
              echo 'Настоятель парафії.';
          }
          ?>
        </p>

        <p class="clergy__info">
          <?php
          $info = get_field('clergy_info');
          if ($info) {
              $allowed_tags = array(
                  'strong' => array(),
                  'em' => array(),
                  'span' => array('style' => array(), 'class' => array()),
                  'a' => array('href' => array(), 'target' => array()),
                  'br' => array()
              );
              echo wp_kses($info, $allowed_tags);
          } else {
              echo '<strong>Дата народження:</strong> 1 жовтня 1990 року.<br>
                    <strong>Дата священницької хіротонії:</strong> 10 лютого 2019 року.<br>
                    <strong>День тезоіменитства:</strong> 5 травня.';
          }
          ?>
        </p>

        <h3 class="clergy__subtitle">
          <?php
          $subtitle = get_field('clergy_bio_subtitle');
          if ($subtitle) {
              $allowed_tags = array(
                  'strong' => array(),
                  'em' => array(),
                  'span' => array('style' => array(), 'class' => array()),
                  'a' => array('href' => array(), 'target' => array()),
                  'br' => array()
              );
              echo wp_kses($subtitle, $allowed_tags);
          } else {
              echo 'Біографія';
          }
          ?>
        </h3>

        <div class="clergy__text">
          <?php
          $bio = get_field('clergy_bio');
          if ($bio) {
              $allowed_tags = array(
                  'p' => array('class' => array()),
                  'strong' => array(),
                  'em' => array(),
                  'span' => array('style' => array(), 'class' => array()),
                  'a' => array('href' => array(), 'target' => array()),
                  'br' => array()
              );
              echo wp_kses($bio, $allowed_tags);
          } else {
              echo '<p class="clergy__text"></p>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
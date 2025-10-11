<section class="school">
  <div class="container school__container">
    <div class="school__header">
      <?php if (function_exists('the_field')): ?>
        <h2 class="school__title">
          <?php
          $title = get_field('school_title');
          $title = str_replace(['<p>', '</p>'], '', $title);
          echo wp_kses_post($title);
          ?>
        </h2>
        <p class="school__subtitle">
          <?php
          $subtitle = get_field('school_subtitle');
          $subtitle = str_replace(['<p>', '</p>'], '', $subtitle);
          echo wp_kses_post($subtitle);
          ?>
        </p>
      <?php endif; ?>
    </div>
    <div class="school__content">
      <div class="school__program">
        <?php if (function_exists('the_field')): ?>
          <h3 class="school__program-title">
            <?php
            $program_title = get_field('school_program_title');
            $program_title = str_replace(['<p>', '</p>'], '', $program_title);
            echo wp_kses_post($program_title);
            ?>
          </h3>
          <?php
          $program_list = get_field('school_program_list');
          if ($program_list):
            $program_list = str_replace(['<p>', '</p>'], '', $program_list);
            echo wp_kses_post($program_list);
          endif;
          ?>
        <?php endif; ?>
      </div>
      <div class="school__image-wrap">
        <?php
        $main_image = get_field('school_gallery_main_image');
        $main_image_url = $main_image && isset($main_image['url']) ? $main_image['url'] : get_template_directory_uri() . '/assets/images/gallery/1.png';
        $alt_text = $main_image && isset($main_image['alt']) ? $main_image['alt'] : (get_field('school_title') ? strip_tags(get_field('school_title')) : 'Недільна школа');
        $gallery_images = [];
        for ($i = 1; $i <= 20; $i++) {
          $image = get_field("gallery_image_$i");
          if ($image && isset($image['url'])) {
            $gallery_images[] = $image['url'];
          }
        }
        // Добавляем главное изображение в начало массива, если оно есть
        if ($main_image && isset($main_image['url'])) {
          array_unshift($gallery_images, $main_image['url']);
        }
        ?>
        <img src="<?php echo esc_url($main_image_url); ?>"
             alt="<?php echo esc_attr($alt_text); ?>"
             class="school__image" id="openGallery">
        <?php if (!empty($gallery_images)): ?>
          <script>
            const galleryImages = <?php echo json_encode(array_filter($gallery_images)); ?>;
          </script>
        <?php else: ?>
          <script>
            const galleryImages = ["<?php echo esc_url($main_image_url); ?>"];
          </script>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
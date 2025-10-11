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
        $gallery_images = [];
        for ($i = 1; $i <= 20; $i++) {
          $image = get_field("gallery_image_$i");
          if ($image) {
            $gallery_images[] = [
              'url' => $image['url'],
              'alt' => $image['alt'] ?: 'Галерея ' . $i
            ];
          }
        }
        $main_image = !empty($gallery_images) ? $gallery_images[0]['url'] : get_template_directory_uri() . '/assets/images/gallery/1.png';
        $alt_text = !empty($gallery_images) ? $gallery_images[0]['alt'] : 'Недільна школа';
        ?>
        <img src="<?php echo esc_url($main_image); ?>"
             alt="<?php echo esc_attr($alt_text); ?>"
             class="school__image" id="openGallery">
        <script>
          const galleryImages = <?php echo json_encode(array_column($gallery_images, 'url')); ?>;
        </script>
      </div>
    </div>
  </div>
</section>
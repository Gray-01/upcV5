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
        $alt_text = get_field('school_title') ? strip_tags(get_field('school_title')) : 'Недільна школа';
        ?>
        <img src="<?php echo esc_url($main_image ?: get_template_directory_uri() . '/assets/images/gallery/1.png'); ?>"
             alt="<?php echo esc_attr($alt_text); ?>"
             class="school__image" id="openGallery">
        <?php
        $gallery_images = get_field('school_gallery_images');
        if ($gallery_images):
          $gallery_images = str_replace(['<p>', '</p>'], '', $gallery_images);
        ?>
          <script>
            const galleryImages = <?php echo $gallery_images; ?>;
          </script>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="announcements">
  <div class="container">
    <div class="announcements__wraper">
      <?php if (function_exists('the_field')): ?>
        <h2 class="announcements__title">
          <?php
          $title = get_field('announcements_title');
          $title = str_replace(['<p>', '</p>'], '', $title);
          echo wp_kses_post($title);
          ?>
        </h2>
        <p class="announcements__subtitle">
          <?php
          $subtitle = get_field('announcements_subtitle');
          $subtitle = str_replace(['<p>', '</p>'], '', $subtitle);
          echo wp_kses_post($subtitle);
          ?>
        </p>
        <ul class="announcements__list">
          <?php for ($i = 1; $i <= 3; $i++):
            $image = get_field("announcement_image_$i");
            $date = get_field("announcement_date_$i");
            $title = get_field("announcement_title_$i");
            $desc = get_field("announcement_desc_$i");
            $link = get_field("announcement_link_$i");
            if ($image || $date || $title || $desc || $link):
              $date = $date ? str_replace(['<p>', '</p>'], '', $date) : '';
              $title = $title ? str_replace(['<p>', '</p>'], '', $title) : '';
              $desc = $desc ? str_replace(['<p>', '</p>'], '', $desc) : '';
              $link = $link ? str_replace(['<p>', '</p>'], '', $link) : '';
          ?>
            <li class="announcement__item">
              <?php if ($image): ?>
                <img class="announcement__img" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(strip_tags($title)); ?>">
              <?php endif; ?>
              <time class="announcement__date" datetime="<?php echo esc_attr(strip_tags($date)); ?>"><?php echo $date; ?></time>
              <h3 class="announcement__title"><?php echo $title; ?></h3>
              <p class="announcement__desc"><?php echo $desc; ?></p>
              <?php echo $link; ?>
            </li>
          <?php endif; ?>
          <?php endfor; ?>
        </ul>
        <div class="announcements__actions">
          <style>
            .announcements__button {
              color: <?php echo esc_attr(get_field('announcements_button_color') ?: '#007bff'); ?> !important;
              background-color: <?php echo esc_attr(get_field('announcements_button_bg') ?: '#fff'); ?> !important;
              transition: all 0.3s ease;
            }
            .announcements__button:hover {
              background-color: <?php echo esc_attr(get_field('announcements_button_bg_hover') ?: '#f0f0f0'); ?> !important;
            }
          </style>
          <?php
          $button_text = get_field('announcements_button_text');
          $button_text = $button_text ? str_replace(['<p>', '</p>'], '', $button_text) : '<a href="#" class="announcements__button">Читати всі оголошення</a>';
          echo wp_kses_post($button_text);
          ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php
/*
Template Name: Паломництва
*/
get_header(); ?>

<section class="pilgrimage">
  <div class="container">
    <h1 class="pilgrimage__title">Паломництва</h1>

    <div class="pilgrimage__grid">
      <?php for ($i = 1; $i <= 4; $i++):
        $image = get_field("pilgrimage_image_$i");
        $title = get_field("pilgrimage_title_$i");
        $text  = get_field("pilgrimage_text_$i");
      ?>
        <?php if ($image || $title || $text): ?>
          <div class="pilgrimage__card">
            <?php if ($image): ?>
              <div class="pilgrimage__image-wrapper">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pilgrimage__image">
              </div>
            <?php endif; ?>

            <?php if ($title): ?>
              <h2 class="pilgrimage__card-title">
                <?php echo wp_kses_post($title); ?>
              </h2>
            <?php endif; ?>

            <?php if ($text): ?>
              <div class="pilgrimage__text">
                <?php echo wp_kses_post($text); ?>
              </div>
            <?php endif; ?>

            <a href="#" class="pilgrimage__link">читати далі</a>
          </div>
        <?php endif; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php
/*
Template Name: Паломництва
*/
get_header(); ?>

<section class="pilgrimage">
  <div class="container">
    <h1 class="pilgrimage__title">Паломництва</h1>

    <div class="pilgrimage__grid">
      <?php if (have_rows('pilgrimage_cards')) : ?>
        <?php while (have_rows('pilgrimage_cards')) : the_row();
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $link = get_sub_field('link');
        ?>
          <div class="pilgrimage__card">
            <?php if ($image): ?>
              <div class="pilgrimage__image-wrapper">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="pilgrimage__image">
              </div>
            <?php endif; ?>

            <?php if ($title): ?>
              <h2 class="pilgrimage__card-title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($text): ?>
              <p class="pilgrimage__text"><?php echo esc_html($text); ?></p>
            <?php endif; ?>

            <?php if ($link): ?>
              <a href="<?php echo esc_url($link); ?>" class="pilgrimage__link">читати далі</a>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Наразі немає паломницьких новин.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>

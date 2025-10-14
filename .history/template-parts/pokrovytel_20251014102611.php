<?php
/*
Template Name: Покровитель парафії
*/
get_header();
?>

<section class="patron">
  <div class="container">
    <h1 class="patron__title">Покровитель парафії</h1>

    <div class="patron__content">
      <div class="patron__image-wrapper">
        <?php
        $image = get_field('patron_image');
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="patron__image">
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron.jpg" alt="Покровитель парафії" class="patron__image">
        <?php endif; ?>
      </div>

      <div class="patron__text">
        <?php
        $text = get_field('patron_text');
        if ($text) {
          echo wp_kses_post($text);
        } else {
          echo '<p>Тут буде розміщено опис покровителя парафії — його життєпис, духовне значення для громади, історичні факти та важливі моменти, що пов’язані з його шануванням.</p>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

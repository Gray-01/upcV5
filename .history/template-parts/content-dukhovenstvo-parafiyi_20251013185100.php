<?php
/*
Template Name: Духовенство парафії
*/
get_header(); ?>

<?php
// Получаем ID изображения из ACF (поле 'clergy_photo')
$image_id = get_field('clergy_photo');
$image_url = $image_id ? wp_get_attachment_image_url($image_id, 'full') : get_template_directory_uri() . '/assets/img/placeholder.jpg';
?>

<section class="clergy">
  <div class="container">
    <h1 class="clergy__title"><?php the_title(); ?></h1>

    <div class="clergy__item">
      <div class="clergy__image-wrap">
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_field('clergy_name'); ?>" class="clergy__image">
      </div>

      <div class="clergy__content">
        <h2 class="clergy__name"><?php the_field('clergy_name'); ?></h2>
        <p class="clergy__desc"><?php the_field('clergy_position'); ?></p>

        <p class="clergy__info">
          <strong>Дата народження:</strong> <?php the_field('birth_date'); ?><br>
          <strong>Дата священницької хіротонії:</strong> <?php the_field('ordination_date'); ?><br>
          <strong>День тезоіменитства:</strong> <?php the_field('name_day'); ?>
        </p>

        <h3 class="clergy__subtitle">Біографія</h3>
        <div class="clergy__text">
          <?php the_field('clergy_bio'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php
/*
Template Name: Молодь
*/
get_header(); ?>

<section class="molod">
  <div class="container">
    <h1 class="molod__title">
      <?php the_title(); ?>
    </h1>

    <?php if (has_post_thumbnail()) : ?>
      <div class="molod__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'molod__image']); ?>
      </div>
    <?php endif; ?>

    <div class="molod__text">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<section class="molod-cards">
  <div class="container molod-cards__grid">
    <?php
      $molod_posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => -1,
        'category_name' => 'molod'
      ]);

      if ($molod_posts->have_posts()) :
        while ($molod_posts->have_posts()) : $molod_posts->the_post(); ?>
          <div class="molod-card">
            <?php if (has_post_thumbnail()) : ?>
              <div class="molod-card__image-wrapper">
                <?php the_post_thumbnail('medium_large', ['class' => 'molod-card__image']); ?>
              </div>
            <?php endif; ?>

            <h3 class="molod-card__title"><?php the_title(); ?></h3>

            <div class="molod-card__text">
              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
            </div>

            <a href="<?php the_permalink(); ?>" class="molod-card__link">Читати далі</a>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>Наразі немає матеріалів у цій категорії.</p>';
      endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>

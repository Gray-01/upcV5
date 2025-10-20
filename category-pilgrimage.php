<?php
get_header(); ?>

<section class="pilgrimage">
  <div class="container">
    <h1 class="pilgrimage__title">Паломництва</h1>

    <div class="pilgrimage__grid">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="pilgrimage__card">
            <?php if (has_post_thumbnail()) : ?>
              <div class="pilgrimage__image-wrapper">
                <?php the_post_thumbnail('large', ['class' => 'pilgrimage__image']); ?>
              </div>
            <?php endif; ?>

            <h2 class="pilgrimage__card-title"><?php the_title(); ?></h2>

            <div class="pilgrimage__text">
              <?php the_excerpt(); ?>
            </div>


            <a href="<?php echo get_permalink( get_page_by_path('gora-afon') ); ?>"
            class="pilgrimage__link">читати далі</a>

          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>Наразі немає паломництв для відображення.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php
get_header();
?>

<section class="molod-single">
  <div class="container">

    <?php while (have_posts()) : the_post(); ?>
        <h1 class="molod-single__title"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="molod-single__image-wrapper">
                <?php the_post_thumbnail('large', ['class' => 'molod-single__image']); ?>
            </div>
        <?php endif; ?>

        <div class="molod-single__content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

  </div>
</section>

<?php get_footer(); ?>

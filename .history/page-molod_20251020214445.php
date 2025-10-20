<?php
/*
Template Name: Молодь
*/

get_header();
?>

<?php
// debug comment to quickly confirm template loaded in page source
echo "\n<!-- PAGE-MOLOD-TEMPLATE-LOADED -->\n";
?>

<section class="molod">
  <div class="container">
    <h1 class="molod__title"><?php the_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="molod__image-wrapper">
          <?php the_post_thumbnail('large', ['class' => 'molod__image']); ?>
        </div>
      <?php endif; ?>

      <div class="molod__text">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<section class="molod-cards">
  <div class="container molod-cards__grid">

    <?php
    // 1) Попробуем получить категорию по slug
    $cat_slug = 'molod';
    $cat_obj = get_category_by_slug( $cat_slug );

    // 2) Если не нашли по slug — пробуем по названию "Молодь"
    if ( ! $cat_obj ) {
        $cat_obj = get_term_by('name', 'Молодь', 'category');
    }

    // 3) Если всё ещё нет — выведем удобный диагностический блок с перечнем рубрик
    if ( ! $cat_obj ) {
        echo '<div style="padding:1rem;background:#fff3cd;border-radius:6px;">';
        echo '<strong>Не знайдено категорію "molod" або "Молодь".</strong><br>';
        echo 'Список існуючих рубрик (slug → name):<br><ul style="margin-top:.5rem;">';
        $cats = get_categories(['hide_empty' => false]);
        foreach ($cats as $c) {
            echo '<li><code>' . esc_html($c->slug) . '</code> → ' . esc_html($c->name) . '</li>';
        }
        echo '</ul></div>';
    } else {
        $cat_id = (int) $cat_obj->term_id;

        // Запрос постов по ID категории
        $molod_posts = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'cat'            => $cat_id,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        if ( $molod_posts->have_posts() ) :
            while ( $molod_posts->have_posts() ) : $molod_posts->the_post(); ?>
                <div class="molod-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <div class="molod-card__image-wrapper">
                        <?php the_post_thumbnail('medium_large', ['class' => 'molod-card__image']); ?>
                      </div>
                    <?php endif; ?>

                    <h3 class="molod-card__title"><?php the_title(); ?></h3>

                    <div class="molod-card__text">
                      <?php echo wp_kses_post( wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20, '...' ) ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="molod-card__link">Читати далі</a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Наразі немає матеріалів у цій категорії.</p>';
        endif;
    }
    ?>

  </div>
</section>

<?php get_footer(); ?>

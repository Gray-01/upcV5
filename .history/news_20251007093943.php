<?php
/*
Template Name: Новини
*/
get_header();
?>

<main class="news-page" style="flex:1; display:flex; flex-direction:column;">
  <section class="news">
    <div class="container">

      <?php if (get_field('news_title')) : ?>
        <h1 class="news__title"><?php the_field('news_title'); ?></h1>
      <?php else : ?>
        <h1 class="news__title">ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ!</h1>
      <?php endif; ?>

      <?php if (get_field('news_subtitle')) : ?>
        <h2 class="news__subtitle"><?php the_field('news_subtitle'); ?></h2>
      <?php else : ?>
        <h2 class="news__subtitle">ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ</h2>
      <?php endif; ?>

      <div class="news__wrapper">
        <?php if (get_field('news_text')) : ?>
          <?php the_field('news_text'); ?>
        <?php else : ?>
          <p class="news__highlight">Дорогі брати та сестри!</p>
          <p class="news__text">Повідомляємо вам, що в місті Берн (Швейцарія), з благословення...</p>
          <p class="news__text">Нехай храм Божий, вдалечині від нашої Батьківщини...</p>
          <p class="news__text">Напередодні Великого Дня Пасхи об'єднаємось...</p>
          <p class="news__highlight">Новоствореною громадою опікуватиметься...</p>
        <?php endif; ?>
      </div>

      <?php
        $image = get_field('news_image');
        if ($image):
      ?>
        <div class="news__image-wrapper">
          <img class="news__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        </div>
      <?php else: ?>
        <div class="news__image-wrapper">
          <img class="news__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-img.jpg" alt="Громада УПЦ">
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
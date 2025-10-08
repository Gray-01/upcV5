<?php
/*
Template Name: Новини
*/
get_header(); ?>

<main>
  <section class="news">
    <div class="container">

      <h1 class="news__title">
        <?php echo get_field('news_title') ?: 'ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ!'; ?>
      </h1>

      <h2 class="news__subtitle">
        <?php echo get_field('news_subtitle') ?: 'ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ'; ?>
      </h2>

      <div class="news__wrapper">
        <?php
          $news_text = get_field('news_text');
          if ($news_text) {
              echo $news_text;
          } else {
              echo '<p class="news__highlight">Дорогі брати та сестри!</p>';
              echo '<p class="news__text">Повідомляємо вам, що в місті Берн (Швейцарія), з благословення...</p>';
              echo '<p class="news__text">Нехай храм Божий, вдалечині від нашої Батьківщини...</p>';
              echo '<p class="news__text">Напередодні Великого Дня Пасхи об'єднаємось...</p>';
              echo '<p class="news__highlight">Новоствореною громадою опікуватиметься...</p>';
          }
        ?>
      </div>

      <div class="news__image-wrapper">
        <?php
          $image = get_field('news_image');
          if ($image) {
              echo '<img class="news__img" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
          } else {
              echo '<img class="news__img" src="' . get_template_directory_uri() . '/assets/images/news-img.jpg" alt="Громада УПЦ">';
          }
        ?>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>

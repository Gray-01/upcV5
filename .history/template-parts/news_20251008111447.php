<section class="news">
  <div class="container">
    <!-- <h1 class="news__title">ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ!</h1> -->

    <?php if (function_exists('the_field')): ?>
      <div class="news__title-wrapper">
        <?php the_field('news_title'); ?>
      </div>
    <?php endif; ?>

    <h2 class="news__subtitle">ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ</h2>

    <div class="news__wrapper">
      <p class="news__highlight">Дорогі брати та сестри!</p>
      <p class="news__text">
        Повідомляємо вам, що в місті Берн (Швейцарія), з благословення...
      </p>
      <p class="news__text">Нехай храм Божий, вдалечині від нашої Батьківщини...</p>
      <p class="news__text">Напередодні Великого Дня Пасхи об'єднаємось...</p>
      <p class="news__highlight">Новоствореною громадою опікуватиметься...</p>
    </div>

    <div class="news__image-wrapper">
      <img class="news__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-img.jpg" alt="Громада УПЦ">
    </div>
  </div>
</section>

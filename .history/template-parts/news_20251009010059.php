<section class="news">
  <div class="container">



    <?php if (function_exists('the_field')): ?>
      <h1 class="news__title">
        <?php
        $title = get_field('news_title');
        // Удаляем <p> и </p>
        $title = str_replace(['<p>', '</p>'], '', $title);
        echo wp_kses_post($title); // Безопасный вывод
        ?>
      </h1>
    <?php endif; ?>


    <!-- <h2 class="news__subtitle">ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ</h2> -->

      <?php if (function_exists('the_field')): ?>
      <h2 class="news__subtitle">
        <?php
        $subtitle = get_field('news_subtitle');
        // Удаляем <p> и </p>
        $subtitle = str_replace(['<p>', '</p>'], '', $subtitle);
        echo wp_kses_post($subtitle); // Безопасный вывод
        ?>
      </h2>
    <?php endif; ?>


        <?php if (function_exists('the_field')): ?>
  <h2 class="news__subtitle">
    <?php
    $subtitle = get_field('news_subtitle');
    var_dump($subtitle); // Отладка: что возвращает поле
    $subtitle = str_replace(['<p>', '</p>'], '', $subtitle);
    echo wp_kses_post($subtitle);
    ?>
  </h2>
<?php endif; ?>


    <!-- <div class="news__wrapper">
      <p class="news__highlight">Дорогі брати та сестри!</p>
      <p class="news__text">
        Повідомляємо вам, що в місті Берн (Швейцарія), з благословення...
      </p>
      <p class="news__text">Нехай храм Божий, вдалечині від нашої Батьківщини...</p>
      <p class="news__text">Напередодні Великого Дня Пасхи об'єднаємось...</p>
      <p class="news__highlight">Новоствореною громадою опікуватиметься...</p>
    </div> -->

        <?php if (function_exists('the_field')): ?>
          <div class="news__wrapper">
            <?php the_field('news_content'); ?>
          </div>
        <?php endif; ?>



  <?php if (function_exists('the_field')): ?>
    <?php $image = get_field('news_image'); ?>
    <?php if ($image): ?>
      <div class="news__image-wrapper">
        <img class="news__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
      </div>
    <?php endif; ?>
  <?php endif; ?>

  </div>
</section>

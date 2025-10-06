<section class="hero">

  <?php
    // Получаем поля из ACF
    $hero_image    = get_field('hero_banner_image'); // Баннер
    $hero_title    = get_field('hero_title');        // Заголовок
    $hero_subtitle = get_field('hero_subtitle');     // Подзаголовок
  ?>

  <?php if ($hero_image): ?>
    <img class="hero__img" src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(strip_tags($hero_title)); ?>">
  <?php endif; ?>

  <div class="hero__content">
    <h1 class="hero__title">
      <?php
        if ($hero_title) {
          echo wp_kses_post($hero_title);
        } else {
          echo 'ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ !';
        }
      ?>
    </h1>

    <div class="hero__subtitle">
      <?php
        if ($hero_subtitle) {
          echo wp_kses_post($hero_subtitle);
        } else {
          echo 'ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ';
        }
      ?>
    </div>

    <!-- Кнопка открытия модалки -->
    <a class="hero__contacts" id="openModal" href="#">
      <?php
        $modal_btn_text = get_field('modal_btn1_text', 'option'); // Берем текст кнопки из Options Page
        echo $modal_btn_text ? esc_html($modal_btn_text) : 'Наші храми';
      ?>
    </a>

  </div>

  <!-- Модальное окно -->
  <?php get_template_part('components/modal'); ?>

</section>

<section class="hero">

  <?php
    // Получаем поля из ACF
    $hero_image    = get_field('hero_banner_image'); // Баннер (изображение)
    $hero_title    = get_field('hero_title');        // Заголовок (WYSIWYG)
    $hero_subtitle = get_field('hero_subtitle');     // Подзаголовок (WYSIWYG)
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

    <a class="hero__contacts" id="openModal" href="#">Наші храми</a>
  </div>

  <?php get_template_part('components/modal'); ?>

</section>

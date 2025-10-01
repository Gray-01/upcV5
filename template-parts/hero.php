<section class="hero">

  <?php
    // Получаем поля из ACF
    $hero_image    = get_field('hero_banner_image'); // URL баннера
    $hero_title    = get_field('hero_title');        // Заголовок
    $hero_subtitle = get_field('hero_subtitle');     // Подзаголовок
  ?>

  <?php if ($hero_image): ?>
    <img class="hero__img" src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($hero_title); ?>">
  <?php endif; ?>

  <div class="hero__content">
    <h1 class="hero__title">
      <?php echo esc_html($hero_title ? $hero_title : 'ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ !'); ?>
    </h1>
    <p class="hero__subtitle">
      <?php echo esc_html($hero_subtitle ? $hero_subtitle : 'ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ'); ?>
    </p>
    <a class="hero__contacts" id="openModal" href="#">Наші храми</a>
  </div>

  <?php get_template_part('components/modal'); ?>

</section>

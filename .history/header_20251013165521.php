<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Громада УПЦ у Швейцарії</title>

<style>
  .burger span {
    background-color: <?php echo esc_attr(get_field('burger_lines_color') ?: '#000'); ?> !important;
  }

  .burger:hover span {
    background-color: <?php echo esc_attr(get_field('burger_lines_hover_color') ?: '#D0A930'); ?> !important;
  }

  .burger {
    background: <?php echo esc_attr(get_field('burger_bg_color') ?: 'rgba(0, 0, 0, 0.55)'); ?> !important;
  }
</style>

  <?php wp_head(); ?>

</head>

<body>

  <header class="header">
    <div class="header__wrapper">

      <div class="header__inner">

        <!--burger start  -->
        <button class="burger" id="burger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!--burger end  -->

        <!--mobilnoe menu  -->
        <div class="mobile-menu" id="mobileMenu">

        <?php
          wp_nav_menu(array(
            'theme_location' => 'header_menu', // подтягиваем пункты главного меню
            'container'      => false,
            'menu_class'     => 'mobile-menu__list',
            'fallback_cb'    => false,
            'walker'         => new Upcv5_Walker_Nav_Menu() // чтобы сохранились стили и hover
          ));
        ?>

        </div>
        <!--mobilnoe menu  -->

        <nav class="header__nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header_menu',
        'container'      => false,
        'menu_class'     => 'nav__list',
        'fallback_cb'    => false, // если меню пустое, ничего не выводить
        'walker'         => new Upcv5_Walker_Nav_Menu()
    ));
    ?>
</nav>


      </div>

    </div>
  </header>

<?php
if (is_page('chytannya-psaltyri-ta-akafistiv')) {
    get_template_part('template-parts/content', 'psaltyr-akafist');
}
if (is_page('zamovlennya-treb-ta-pominan')) {
    get_template_part('template-parts/content', 'treb-pominan');
}
if (is_page('pro-parafiyu')) {
    get_template_part('template-parts/content', 'pro-parafiyu');
}
if (is_page('dukhovenstvo-parafiyi')) {
    get_template_part('template-parts/content', 'dukhovenstvo-parafiyi');
}
?>

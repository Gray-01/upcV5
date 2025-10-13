<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Громада УПЦ у Швейцарії</title>

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
              'theme_location' => 'mobile_menu',
              'container'      => false,
              'menu_class'     => 'mobile-menu__list',
              'fallback_cb'    => false
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

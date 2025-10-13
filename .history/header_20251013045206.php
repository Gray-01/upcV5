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
          <ul class="mobile-menu__list">
            <li><a href="#">Головна</a></li>

            <li class="has-submenu">
              <a href="#">Послуги <span class="arrow"></span></a>
              <ul class="submenu">
                <li><a href="#">Хрещення</a></li>
                <li><a href="#">Шлюб</a></li>
                <li><a href="#">Сповідь</a></li>
                <li><a href="#">Читання Псалтирі та Акафістів</a></li>
                <li><a href="#">Замовлення треб та поминань</a></li>
              </ul>
            </li>

            <li class="has-submenu">
              <a href="#">Наша парафія <span class="arrow"></span></a>
              <ul class="submenu">
                <li><a href="#">Про парафію</a></li>
                <li><a href="#">Духовенство парафії</a></li>
                <li><a href="#">Підтримка парафії</a></li>
                <li><a href="#">Покровитель парафії</a></li>
              </ul>
            </li>


            <li><a href="#">Розклад</a></li>
            <li><a href="#">Паломництва</a></li>
            <li><a href="#">Молодь</a></li>
            <li><a href="#">Пожертвування</a></li>
            <li><a href="#">Новини</a></li>
            <li><a href="#">Контакти</a></li>
          </ul>

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

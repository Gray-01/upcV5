<?php
// Подключаем стили и скрипты, и передаём путь темы в JS
function upcv5_enqueue_assets() {
    // CSS (подставляем filemtime для автоматического сброса кэша при изменении файлов)
    wp_enqueue_style(
        'upcv5-reset',
        get_template_directory_uri() . '/assets/css/reset.css',
        array(),
        file_exists( get_template_directory() . '/assets/css/reset.css' ) ? filemtime( get_template_directory() . '/assets/css/reset.css' ) : null
    );

    wp_enqueue_style(
        'upcv5-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('upcv5-reset'),
        file_exists( get_template_directory() . '/assets/css/style.css' ) ? filemtime( get_template_directory() . '/assets/css/style.css' ) : null
    );

    wp_enqueue_style(
        'upcv5-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('upcv5-style'),
        file_exists( get_template_directory() . '/assets/css/responsive.css' ) ? filemtime( get_template_directory() . '/assets/css/responsive.css' ) : null
    );

    // JS — подключаем один раз под хэндлом 'upcv5-main'
    $main_js_path = get_template_directory() . '/assets/js/main.js';
    wp_enqueue_script(
        'upcv5-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(), // зависимости (например 'jquery'), у тебя их нет
        file_exists( $main_js_path ) ? filemtime( $main_js_path ) : null,
        true // подключить перед </body>
    );

    // Передаём в JS путь к теме (themeData.templateUrl)
    wp_localize_script(
        'upcv5-main',
        'themeData',
        array(
            'templateUrl' => get_template_directory_uri()
        )
    );
}
add_action( 'wp_enqueue_scripts', 'upcv5_enqueue_assets' );

// Поддержка темы
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Регистрируем меню
function upcv5_register_menus() {
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'upcv5'),
    ));
}
add_action('after_setup_theme', 'upcv5_register_menus');

// Фолбэк функция для меню
function upcv5_default_menu() {
    echo '<ul class="header__list">';
    echo '<li class="header__item"><a href="#">Головна</a></li>';
    echo '<li class="header__item"><a href="#">Новини</a></li>';
    echo '<li class="header__item"><a href="#">Розклад</a></li>';
    echo '<li class="header__item"><a href="#">Контакти</a></li>';
    echo '</ul>';
}

// Кастомный Walker для меню с точными классами верстки
class Upcv5_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Начало подменю
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"nav__submenu\">\n";
    }

    // Начало элемента меню
    function start_el(  &$output, $item, $depth=0, $args=array(), $id=0  ) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $li_class = 'nav__item';
        if ( in_array('menu-item-has-children', $classes) ) {
            $li_class .= ' nav__has-submenu';
        }

        $output .= $indent . '<li class="'.esc_attr($li_class).'">';
        $output .= '<a class="nav__link" href="'.esc_url($item->url).'">'.esc_html($item->title).'</a>';
    }

    // Конец элемента меню
    function end_el( &$output, $item, $depth=0, $args=array() ) {
        $output .= "</li>\n";
    }
}
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

// Кастомный Walker для меню с поддержкой ACF
class Upcv5_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Элемент меню старт
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $menu_id = $item->ID;

        // Получаем ACF-поля для пункта меню по ID элемента
        $title_color   = get_field('цвет_текста', $menu_id);
        $hover_color   = get_field('цвет_при_наведении', $menu_id);
        $font_size     = get_field('размер_шрифта', $menu_id);
        $custom_url    = get_field('ссылка', $menu_id);
        $custom_title  = get_field('заголовок_меню', $menu_id);

        $title_attr = $custom_title ? $custom_title : $item->title;
        $url        = $custom_url ? $custom_url : $item->url;

        // Формируем стили
        $style = '';
        if($title_color) $style .= "color: {$title_color};";
        if($font_size)   $style .= "font-size: {$font_size}px;";

        // Добавляем li и ссылку
        $output .= '<li class="nav__item'.( $args->has_children ? ' nav__has-submenu' : '' ).'">';
        $output .= '<a class="nav__link" href="'.esc_url($url).'" style="'.esc_attr($style).'"';
        if($hover_color) {
            $output .= " onmouseover=\"this.style.color='{$hover_color}'\" onmouseout=\"this.style.color='{$title_color}'\"";
        }
        $output .= '>'.esc_html($title_attr).'</a>';
    }

    // Завершение li
    function end_el(&$output, $_

<?php
// ==================== ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ ====================
function upcv5_enqueue_assets() {
    // CSS
    wp_enqueue_style(
        'upcv5-reset',
        get_template_directory_uri() . '/assets/css/reset.css',
        array(),
        file_exists(get_template_directory() . '/assets/css/reset.css') ? filemtime(get_template_directory() . '/assets/css/reset.css') : null
    );
    wp_enqueue_style(
        'upcv5-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('upcv5-reset'),
        file_exists(get_template_directory() . '/assets/css/style.css') ? filemtime(get_template_directory() . '/assets/css/style.css') : null
    );
    wp_enqueue_style(
        'upcv5-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('upcv5-style'),
        file_exists(get_template_directory() . '/assets/css/responsive.css') ? filemtime(get_template_directory() . '/assets/css/responsive.css') : null
    );

    // JS
    $main_js_path = get_template_directory() . '/assets/js/main.js';
    wp_enqueue_script(
        'upcv5-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($main_js_path) ? filemtime($main_js_path) : null,
        true
    );

    // Передаём путь темы в JS
    wp_localize_script(
        'upcv5-main',
        'themeData',
        array('templateUrl' => get_template_directory_uri())
    );
}
add_action('wp_enqueue_scripts', 'upcv5_enqueue_assets');

// ==================== ПОДДЕРЖКА ТЕМЫ ====================
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// ==================== РЕГИСТРАЦИЯ МЕНЮ ====================
function upcv5_register_menus() {
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'upcv5'),
    ));
}
add_action('after_setup_theme', 'upcv5_register_menus');

// ==================== КАСТОМНЫЙ WALKER ДЛЯ МЕНЮ С ACF ====================
class Upcv5_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Начало подменю
    function start_lvl(&$output, $depth = 0, $args = []) {
        $output .= '<ul class="nav__submenu">';
    }

    // Конец подменю
    function end_lvl(&$output, $depth = 0, $args = []) {
        $output .= '</ul>';
    }

    // Элемент меню старт
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $menu_id = $item->ID;

        // Получаем ACF-поля
        $custom_title = get_field('menu_title', $menu_id);
        $custom_url   = get_field('ссылка', $menu_id);
        $title_color  = get_field('цвет_текста', $menu_id);
        $hover_color  = get_field('цвет_при_наведении', $menu_id);
        $font_size    = get_field('размер_шрифта', $menu_id);

        $title = $custom_title ? $custom_title : $item->title;
        $url   = $custom_url ? $custom_url : $item->url;

        // Формируем стили
        $style = '';
        if($title_color) $style .= "color: {$title_color} !important;";
        if($font_size)   $style .= "font-size: {$font_size}px;";

        // Проверка на наличие сабменю
        $has_children = property_exists($item, 'has_children') && $item->has_children ? ' nav__has-submenu' : '';

        $output .= '<li class="nav__item' . esc_attr($has_children) . '">';
        $output .= '<a class="nav__link" href="'.esc_url($url).'" style="'.esc_attr($style).'"';
        if($hover_color) {
            $output .= " onmouseover=\"this.style.color='{$hover_color}'\" onmouseout=\"this.style.color='{$title_color}'\"";
        }
        $output .= '>'.esc_html($title).'</a>';
    }

    // Элемент меню конец
    function end_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $output .= "</li>";
    }
}

// Передаем информацию о наличии дочерних элементов
add_filter('wp_nav_menu_objects', function($items, $args) {
    foreach ($items as &$item) {
        $item->has_children = false;
        foreach ($items as $child) {
            if ($child->menu_item_parent == $item->ID) {
                $item->has_children = true;
                break;
            }
        }
    }
    return $items;
}, 10, 2);

// ==================== ACF OPTIONS PAGE ДЛЯ МОДАЛЬНОГО ОКНА ====================
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Modal Window',
        'menu_title' => 'Modal Window',
        'menu_slug'  => 'modal-window',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

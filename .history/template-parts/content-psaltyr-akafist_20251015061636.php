<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header();
?>

<section class="psaltyr-akafist">
    <div class="container">

        <?php
        if( function_exists('get_field') ):

            // Заголовок H1
            $title = get_field('main_title');
            if( $title ) {
                echo '<h1 class="psaltyr__title">' . esc_html($title) . '</h1>';
            }

            // Подзаголовок H2
            $subtitle = get_field('subtitle');
            if( $subtitle ) {
                echo '<h2 class="psaltyr__subtitle">' . esc_html($subtitle) . '</h2>';
            }

            // Основное изображение
            $image = get_field('main_image'); // массив
            if( $image && isset($image['url']) ) {
                echo '<div class="psaltyr__image-wrapper">';
                echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="psaltyr__image">';
                echo '</div>';
            }

            // Основной текст (WYSIWYG, выводим HTML напрямую)
            $main_text = get_field('main_text');
            if( $main_text ) {
                echo '<div class="psaltyr__text">' . $main_text . '</div>';
            }

        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>


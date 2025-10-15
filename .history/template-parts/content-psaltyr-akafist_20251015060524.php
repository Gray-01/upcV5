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

            $title = get_field('main_title');        // Заголовок h1
            $subtitle = get_field('main_subtitle');  // Подзаголовок h2
            $image_id = get_field('main_image');     // Изображение
            $main_text = get_field('main_text');     // Основной текст WYSIWYG

            if( $title ) {
                echo '<h1 class="psaltyr__title">' . $title . '</h1>';
            }

            if( $subtitle ) {
                echo '<h2 class="psaltyr__subtitle">' . $subtitle . '</h2>';
            }

            if( $image_id ) {
                echo '<div class="psaltyr__image-wrapper">';
                echo wp_get_attachment_image( $image_id, 'full', false, array('class'=>'psaltyr__image') );
                echo '</div>';
            }

            if( $main_text ) {
                // **Главное**: выводим как есть, HTML будет работать
                echo '<div class="psaltyr__text">' . $main_text . '</div>';
            }

        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>

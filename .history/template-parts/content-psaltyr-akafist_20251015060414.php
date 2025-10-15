<?php
/*
 * Template Name: Читання Псалтирі та Акафістів
 */
get_header();
?>

<section class="psaltyr-akafist">
    <div class="container">

        <?php if( function_exists('get_field') ): ?>

            <?php
            $title = get_field('main_title');          // Заголовок h1
            $subtitle = get_field('main_subtitle');    // Подзаголовок h2
            $image_id = get_field('main_image');       // Изображение
            $main_text = get_field('main_text');       // Основной текст (WYSIWYG)
            ?>

            <?php if ( $title ): ?>
                <h1 class="psaltyr__title"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>

            <?php if ( $subtitle ): ?>
                <h2 class="psaltyr__subtitle"><?php echo esc_html($subtitle); ?></h2>
            <?php endif; ?>

            <?php if ( $image_id ): ?>
                <div class="psaltyr__image-wrapper">
                    <?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'psaltyr__image']); ?>
                </div>
            <?php endif; ?>

            <?php if ( $main_text ): ?>
                <div class="psaltyr__text">
                    <?php echo $main_text; // Просто выводим HTML из WYSIWYG ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

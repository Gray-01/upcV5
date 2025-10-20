<?php
get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <?php if (in_category('molod')) : ?>
        <section class="molod-single">
            <div class="container">

                <!-- Заголовок записи -->
                <h1 class="molod-single__title"><?php the_title(); ?></h1>

                <!-- Миниатюра -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="molod-single__image-wrapper">
                        <?php the_post_thumbnail('large', ['class' => 'molod-single__image']); ?>
                    </div>
                <?php endif; ?>

                <!-- Контент -->
                <div class="molod-single__content">
                    <?php the_content(); ?>
                </div>

            </div>
        </section>
    <?php else : ?>
        <div class="container">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>

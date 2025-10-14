<?php
/*
Template Name: Новини
*/
get_header(); ?>

<section class="news">
    <div class="container">
        <h1 class="news__title">Новини</h1>

        <div class="news__grid">
            <?php
            // 4 новости (карточки) через ACF
            for ($i = 1; $i <= 4; $i++) :
                $image = get_field("news_image_$i");
                $subtitle = get_field("news_subtitle_$i");
                $text = get_field("news_text_$i");
                $link = get_field("news_link_$i");
            ?>
                <div class="news__card">
                    <div class="news__image-wrapper">
                        <?php if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="news__image">
                        <?php endif; ?>
                    </div>

                    <?php if ($subtitle): ?>
                        <h2 class="news__card-title"><?php echo wp_kses_post($subtitle); ?></h2>
                    <?php endif; ?>

                    <?php if ($text): ?>
                        <div class="news__text"><?php echo wp_kses_post($text); ?></div>
                    <?php endif; ?>

                    <?php if ($link): ?>
                        <a href="<?php echo esc_url($link); ?>" class="news__link">читати далі</a>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>


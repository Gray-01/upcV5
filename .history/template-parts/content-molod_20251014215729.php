<?php
/*
Template Name: Молодь
*/
get_header();
?>

<section class="molod">
  <div class="container">
    <!-- Заголовок H1 -->
    <h1 class="molod__title">
      <?php
        $title = get_field('molod_page_title');
        echo $title ? wp_kses_post($title) : 'Молодь';
      ?>
    </h1>

    <!-- Основное изображение -->
    <div class="molod__image-wrapper">
      <?php
        $image = get_field('molod_main_image');
        if ($image) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="molod__image">
      <?php endif; ?>
    </div>

    <!-- Субтайтл -->
    <h2 class="molod__subtitle">
      <?php
        $subtitle = get_field('molod_subtitle');
        echo $subtitle ? wp_kses_post($subtitle) : 'Молодь — це важлива частина суспільства, адже саме вона формує майбутнє нації та держави.';
      ?>
    </h2>

    <!-- Основной текст -->
    <div class="molod__text">
      <?php
        $text = get_field('molod_text');
        if ($text) {
            echo wp_kses_post($text);
        } else {
            echo '<p>Під терміном «молодь» зазвичай розуміють вікову групу людей від 14 до 35 років. Цей період характеризується активним розвитком, навчанням, професійним становленням і духовним зростанням.</p>
                  <p>Молодь є невід’ємною частиною парафіяльного життя й відіграє важливу роль у житті церковної громади, приносячи нові ідеї, енергію та ентузіазм.</p>
                  <p>У нашій парафії ми прагнемо регулярно проводити молодіжні зустрічі, які стають платформою для обговорення важливих тем, що хвилюють молодих людей.</p>
                  <p>Підтримка молодіжного руху є надзвичайно важливою для розвитку церковної громади. Тому наша парафія щороку організовує молодіжні паломництва до різних країн Європи. Під час цих поїздок учасники мають можливість краще пізнати одне одного, поділитися досвідом духовного становлення й просто знайти нових друзів.</p>
                  <p>Щиро запрошуємо всіх молодих людей долучатися до нашої парафіяльної молодіжної спільноти та разом із нами відкривати для себе прекрасний світ життя у православній вірі.</p>';
        }
      ?>
    </div>
  </div>
</section>

<!-- Блок с 3 карточками -->
<section class="molod-cards">
  <div class="container molod-cards__grid">
    <?php for ($i=1; $i<=3; $i++) :
      $card_image = get_field("molod_card_image_$i");
      $card_title = get_field("molod_card_title_$i");
      $card_text  = get_field("molod_card_text_$i");
      $card_link  = get_field("molod_card_link_$i");
    ?>
      <div class="molod-card">
        <?php if ($card_image) : ?>
          <div class="molod-card__image-wrapper">
            <img src="<?php echo esc_url($card_image['url']); ?>" alt="<?php echo esc_attr($card_image['alt']); ?>" class="molod-card__image">
          </div>
        <?php endif; ?>
        <h3 class="molod-card__title"><?php echo $card_title ? wp_kses_post($card_title) : 'Заголовок карточки'; ?></h3>
        <div class="molod-card__text"><?php echo $card_text ? wp_kses_post($card_text) : 'Текст карточки'; ?></div>
        <?php if ($card_link) : ?>
          <a href="<?php echo esc_url($card_link); ?>" class="molod-card__link">Читати далі</a>
        <?php endif; ?>
      </div>
    <?php endfor; ?>
  </div>
</section>

<?php get_footer(); ?>


Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis distinctio eum alias, delectus expedita iste. Autem dolorem, hic, recusandae culpa illo at excepturi voluptas tenetur odio reiciendis cum et est nostrum sit assumenda temporibus sequi ullam porro aspernatur amet suscipit delectus deleniti maxime! Autem, neque?

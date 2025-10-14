<?php
/*
Template Name: Покровитель парафії
*/
get_header();
?>

<section class="patron">
  <div class="container">
    <h1 class="patron__title">
      <?php
      $title = get_field('patron_page_title');
      if ($title) {
          echo wp_kses_post($title);
      } else {
          echo 'Покровитель парафії';
      }
      ?>
    </h1>

    <div class="patron__content">
      <!-- Картинка -->
      <div class="patron__image-wrapper">
        <?php
        $image = get_field('patron_image');
        if ($image) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="patron__image">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/patron.jpg" alt="Покровитель парафії" class="patron__image">
        <?php endif; ?>
      </div>

      <!-- Первый абзац текста -->
      <div class="patron__text-right">
        <?php
        $first_paragraph = get_field('patron_text_first');
        if ($first_paragraph) {
            echo wp_kses_post($first_paragraph);
        } else {
            echo '<p>Святитель Спиридон, єпископ Триміфунтський, чудотворець, народився наприкінці III століття на острові Кіпр...</p>';
        }
        ?>
      </div>
    </div>

    <!-- Остальной текст на всю ширину -->
    <div class="patron__text-full">
      <?php
      $full_text = get_field('patron_text_full');
      if ($full_text) {
          echo wp_kses_post($full_text);
      } else {
          echo '<p>З дитинства святий Спиридон пас овець і вів чисте, богугодне життя...</p>
                <p>У зрілому віці він став батьком сімейства...</p>
                <p>Його доброта поєднувалася зі справедливою суворістю до недостойних...</p>';
      }
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>

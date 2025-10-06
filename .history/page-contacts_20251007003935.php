<?php
/* Template Name: Contacts */
get_header(); // Подключаем шапку темы
?>

<main class="contacts">
  <section class="contacts__section container">
    <h1><?php the_field('contacts_title'); ?></h1>
    <div class="contacts__text">
      <?php the_field('contacts_text'); ?>
    </div>

    <div class="contacts__grid">
      <?php
      $btn_hover = get_field('button_hover'); // получаем hover цвет один раз
      ?>
      <?php for ($i=1; $i<=5; $i++): ?>
        <?php
          $city = get_field("city_{$i}_name");
          $map  = get_field("city_{$i}_map");
        ?>
        <?php if($city && $map): ?>
          <div class="contacts__card">
            <h2 class="contacts__city"><?php echo $city; ?></h2>
            <a href="<?php echo esc_url($map); ?>"
               target="_blank"
               class="contacts__btn"
               style="background:<?php the_field('button_bg'); ?>;
                      color:<?php the_field('button_color'); ?>;">
              <?php the_field('button_text'); ?>
            </a>
          </div>
        <?php endif; ?>
      <?php endfor; ?>
    </div>
  </section>
</main>

<?php if($btn_hover): ?>
<style>
.contacts__btn:hover {
  background: <?php echo esc_attr($btn_hover); ?> !important;
}
</style>
<?php endif; ?>

<?php get_footer(); // Подключаем подвал темы ?>

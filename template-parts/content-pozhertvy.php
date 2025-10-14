<?php
/* Template Name: Пожертви */
get_header();
?>

<section class="donate">
  <div class="container">
    <h1 class="donate__title"><?php the_field('donate_title'); ?></h1>

    <div class="donate__intro">
      <?php the_field('donate_text'); ?>
    </div>

    <div class="donate__grid">

      <div class="donate__card">
        <h3 class="donate__card-title">Банківські карти</h3>
        <div class="donate__card-content">
          <?php the_field('donate_bank'); ?>
        </div>
      </div>

      <div class="donate__card">
        <h3 class="donate__card-title">Криптовалюта</h3>
        <div class="donate__card-content">
          <?php the_field('donate_crypto'); ?>
        </div>
      </div>

      <div class="donate__card">
        <h3 class="donate__card-title">Інші способи допомоги</h3>
        <div class="donate__card-content">
          <?php the_field('donate_other'); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>

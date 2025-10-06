<?php
/* Template Name: Contacts */
get_header(); ?>

<main class="contacts__section">

  <h1><?php the_field('contacts_title'); ?></h1>
  <div class="contacts__text">
    <?php the_field('contacts_text'); ?>
  </div>

  <div class="contacts__grid">

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

</main>

<style>
.contacts__btn:hover {
  background: <?php the_field('button_hover'); ?> !important;
}
</style>

<?php get_footer(); ?>

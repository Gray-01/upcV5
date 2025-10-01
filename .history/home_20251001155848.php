<?php
/*
Template Name: Home
*/
get_header();
?>

<main class="main">

  <?php get_template_part('template-parts/hero'); ?>
  <?php get_template_part('template-parts/news'); ?>
  <?php get_template_part('template-parts/announcements'); ?>
  <?php get_template_part('template-parts/school'); ?>
  <?php get_template_part('template-parts/gallery'); ?>

</main>

<?php get_footer(); ?>

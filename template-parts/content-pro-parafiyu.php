<?php
/*
 * Template Name: Про парафію
 */
get_header(); ?>

<section class="pro-parafiyu">
  <?php
  $custom_heading = get_field('custom_heading');
  if ($custom_heading) {
      $heading_content = trim($custom_heading);
      if (preg_match('/<[^>]+>/', $heading_content)) {
          echo '<div class="custom-heading">' . $heading_content . '</div>';
      } else {
          echo '<h1 class="pro-parafiyu-heading">' . esc_html($heading_content) . '</h1>';
      }
  } else {
      the_title('<h1>', '</h1>');
  }
  ?>

  <div class="section-1">
    <?php
    $image_id_1 = get_field('image_for_section_1');
    if ($image_id_1) {
        echo '<div class="parafiyu-image">' . wp_get_attachment_image($image_id_1, 'full') . '</div>';
    }
    ?>
    <div class="parafiyu-text">
      <?php
      $text_section_1 = get_field('text_section_1');
      if ($text_section_1) {
          echo $text_section_1;
      }
      ?>
    </div>
  </div>

  <div class="section-2">
    <div class="parafiyu-text">
      <?php
      $text_section_2 = get_field('text_section_2');
      if ($text_section_2) {
          echo $text_section_2;
      }
      ?>
    </div>
    <?php
    $image_id_2 = get_field('image_for_section_2');
    if ($image_id_2) {
        echo '<div class="parafiyu-image">' . wp_get_attachment_image($image_id_2, 'full') . '</div>';
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>
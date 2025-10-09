<section class="schedule">
  <div class="container">
    <div class="schedule__wraper">
      <?php if (function_exists('the_field')): ?>
        <h2 class="schedule__title">
          <?php
          $title = get_field('schedule_title');
          $title = str_replace(['<p>', '</p>'], '', $title);
          echo wp_kses_post($title);
          ?>
        </h2>
        <?php
        $schedule_list = get_field('schedule_list');
        if ($schedule_list):
          $schedule_list = str_replace(['<p>', '</p>'], '', $schedule_list);
          echo $schedule_list; // Прямой вывод без wp_kses
        endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
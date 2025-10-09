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
        <style>
          .schedule__item {
            background-color: <?php echo esc_attr(get_field('schedule_background_color') ?: '#D0A930'); ?> !important;
          }
        </style>
        <ul class="schedule__list">
          <?php
          $date_1 = get_field('schedule_date_1');
          $day_1 = get_field('schedule_day_1');
          $event_1 = get_field('schedule_event_1');
          $time_1 = get_field('schedule_time_1');
          $place_1 = get_field('schedule_place_1');
          if ($date_1 || $day_1 || $event_1 || $time_1 || $place_1):
            $date_1 = $date_1 ? str_replace(['<p>', '</p>'], '', $date_1) : '';
            $day_1 = $day_1 ? str_replace(['<p>', '</p>'], '', $day_1) : '';
            $event_1 = $event_1 ? str_replace(['<p>', '</p>'], '', $event_1) : '';
            $time_1 = $time_1 ? str_replace(['<p>', '</p>'], '', $time_1) : '';
            $place_1 = $place_1 ? str_replace(['<p>', '</p>'], '', $place_1) : '';
          ?>
            <li class="schedule__item">
              <div class="schedule__datetime">
                <time class="schedule__date"><?php echo $date_1; ?></time>
                <time class="schedule__day"><?php echo $day_1; ?></time>
              </div>
              <span class="schedule__event"><?php echo $event_1; ?></span>
              <span class="schedule__time"><?php echo $time_1; ?></span>
              <span class="schedule__place"><?php echo $place_1; ?></span>
            </li>
          <?php endif; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
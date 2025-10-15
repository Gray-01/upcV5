<section id="schedule" class="schedule">
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
          .schedule__item:hover {
            background-color: <?php echo esc_attr(get_field('schedule_hover_color') ?: '#e0b940'); ?> !important;
          }
        </style>
        <ul class="schedule__list">
          <?php
          for ($i = 1; $i <= 9; $i++):
            $date = get_field("schedule_date_$i");
            $day = get_field("schedule_day_$i");
            $event = get_field("schedule_event_$i");
            $time = get_field("schedule_time_$i");
            $place = get_field("schedule_place_$i");
            if ($date || $day || $event || $time || $place):
              $date = $date ? str_replace(['<p>', '</p>'], '', $date) : '';
              $day = $day ? str_replace(['<p>', '</p>'], '', $day) : '';
              $event = $event ? str_replace(['<p>', '</p>'], '', $event) : '';
              $time = $time ? str_replace(['<p>', '</p>'], '', $time) : '';
              $place = $place ? str_replace(['<p>', '</p>'], '', $place) : '';
          ?>
            <li class="schedule__item">
              <div class="schedule__datetime">
                <time class="schedule__date"><?php echo $date; ?></time>
                <time class="schedule__day"><?php echo $day; ?></time>
              </div>
              <span class="schedule__event"><?php echo $event; ?></span>
              <span class="schedule__time"><?php echo $time; ?></span>
              <span class="schedule__place"><?php echo $place; ?></span>
            </li>
          <?php endif; ?>
          <?php endfor; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
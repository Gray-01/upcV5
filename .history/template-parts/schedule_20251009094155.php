<section class="schedule">
  <div class="container">
    <div class="schedule__wraper">
      <?php if (function_exists('the_field')): ?>
        <h2 class="schedule__title">
          <?php
          $title = get_field('schedule_title');
          // Удаляем <p> и </p>
          $title = str_replace(['<p>', '</p>'], '', $title);
          echo wp_kses_post($title); // Безопасный вывод заголовка
          ?>
        </h2>
      <?php endif; ?>
      <?php if (function_exists('the_field') && get_field('schedule_list')): ?>
        <?php
        $schedule_list = get_field('schedule_list');
        // Удаляем возможные лишние <p> теги, добавленные WYSIWYG
        $schedule_list = str_replace(['<p>', '</p>'], '', $schedule_list);
        echo wp_kses_post($schedule_list); // Безопасный вывод HTML списка
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="schedule">
  <div class="container">
    <div class="schedule__wraper">
      <!-- <h2 class="schedule__title">Розклад Богослужінь</h2> -->


<?php if (function_exists('the_field')): ?>
  <h2 class="schedule__title">
    <?php
    $title = get_field('schedule_title');
    // Удаляем <p> и </p>
    $title = str_replace(['<p>', '</p>'], '', $title);
    echo wp_kses_post($title); // Безопасный вывод
    ?>
  </h2>
<?php endif; ?>


      <ul class="schedule__list">

        <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <!-- <li class="schedule__item">

          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span> -->
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>
                <li class="schedule__item">
          <div class="schedule__datetime">
            <time class="schedule__date">2 квітня</time>
            <time class="schedule__day">неділя</time>
          </div>
          <span class="schedule__event">читання великого канону</span>
          <span class="schedule__time">10:00</span>
          <span class="schedule__place">Берн, Швейцария</span>
        </li>

        <!-- Повторяем элементы по аналогии -->

      </ul>
    </div>
  </div>
</section>

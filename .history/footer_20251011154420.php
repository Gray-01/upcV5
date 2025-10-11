<footer class="footer">
  <div class="footer__container">
    <div class="footer__left">
      <?php if (function_exists('the_field')): ?>
        <h2 class="footer__title">
          <?php
          $title = get_field('footer_title');
          $title = $title ? str_replace(['<p>', '</p>'], '', $title) : 'Парафія на честь св. Жен-Мироносиць';
          echo wp_kses_post($title);
          ?>
        </h2>
        <p class="footer__subtitle">
          <?php
          $subtitle = get_field('footer_subtitle');
          $subtitle = $subtitle ? str_replace(['<p>', '</p>'], '', $subtitle) : 'Українська Православна Церква в Швейцарії';
          echo wp_kses_post($subtitle);
          ?>
        </p>
      <?php else: ?>
        <h2 class="footer__title">Парафія на честь св. Жен-Мироносиць</h2>
        <p class="footer__subtitle">Українська Православна Церква в Швейцарії</p>
      <?php endif; ?>
    </div>
    <div class="footer__right">
      <?php
      $contact = get_field('footer_contact');
      $contact = $contact ? str_replace(['<p>', '</p>'], '', $contact) : '<a href="tel:+41798365172" class="footer__contact">+41 79 836 51 72</a>';
      echo wp_kses_post($contact);
      ?>
      <?php
      $telegram_link = get_field('footer_telegram_link');
      $telegram_link = $telegram_link ? str_replace(['<p>', '</p>'], '', $telegram_link) : '<a href="https://t.me/+p-DuuBndikExZmFi" class="footer__icon" target="_blank" aria-label="Telegram"><svg width="24" height="24" viewBox="0 0 240 240" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M120 0C53.7 0 0 53.7 0 120s53.7 120 120 120 120-53.7 120-120S186.3 0 120 0zm57.1 83.6l-18.9 88.9c-1.4 6.2-5.1 7.8-10.3 4.9l-28.6-21.1-13.8 13.3c-1.5 1.5-2.8 2.8-5.7 2.8l2-28.1 51.2-46c2.2-2 0.4-3.2-3.4-1.2l-63.3 39.8-27.2-8.5c-5.9-1.8-6-5.9 1.2-8.7l106.4-41.1c4.9-1.9 9.2 1.2 7.8 8.4z" /></svg></a>';
      echo wp_kses_post($telegram_link);
      ?>
      <?php
      $facebook_link = get_field('footer_facebook_link');
      $facebook_link = $facebook_link ? str_replace(['<p>', '</p>'], '', $facebook_link) : '<a href="https://www.facebook.com/people/%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D1%81%D1%8C%D0%BA%D0%B0-%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0-%D0%B3%D1%80%D0%BE%D0%BC%D0%B0%D0%B4%D0%B0-%D0%B2-%D0%A8%D0%B2%D0%B5%D0%B9%D1%86%D0%B0%D1%80%D1%96%D1%97/100095338009089/" class="footer__icon" target="_blank" aria-label="Facebook"><svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M22.675 0H1.325C0.593 0 0 0.593 0 1.325v21.351C0 23.406.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.658-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.716-1.795 1.764v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.593 1.324-1.324V1.325C24 .593 23.406 0 22.675 0z" /></svg></a>';
      echo wp_kses_post($facebook_link);
      ?>
    </div>
  </div>
  <div class="footer__bottom">
    © 2025 Українська Православна Церква в Швейцарії. Всі права захищені.
  </div>
  <?php var_dump(get_field('footer_telegram_link')); ?>
<?php var_dump(get_field('footer_facebook_link')); ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>
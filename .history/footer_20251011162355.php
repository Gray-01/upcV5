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
    </div>
  </div>
  <div class="footer__bottom">
    © 2025 Українська Православна Церква в Швейцарії. Всі права захищені.
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
<?php
/* Template Name: Пожертви */
get_header();
?>

<section class="donate">
  <div class="container">
    <h1 class="donate__title"><?php the_field('donate_title'); ?></h1>

    <div class="donate__intro">
      <?php the_field('donate_text'); ?>
    </div>

    <div class="donate__grid">

      <!-- Банківські карти -->
      <div class="donate__card">
        <h3 class="donate__card-title">Банківські карти</h3>
        <div class="donate__card-content">
          <div class="donate__copy-wrapper">
            <div class="donate__text" id="bank-text"><?php the_field('donate_bank'); ?></div>
            <button class="donate__copy-btn" data-target="bank-text" aria-label="Скопіювати реквізити">
              📋
            </button>
          </div>
        </div>
      </div>

      <!-- Криптовалюта -->
      <div class="donate__card">
        <h3 class="donate__card-title">Криптовалюта</h3>
        <div class="donate__card-content">
          <div class="donate__copy-wrapper">
            <div class="donate__text" id="crypto-text"><?php the_field('donate_crypto'); ?></div>
            <button class="donate__copy-btn" data-target="crypto-text" aria-label="Скопіювати реквізити">
              📋
            </button>
          </div>
        </div>
      </div>

      <!-- Інші способи допомоги -->
      <div class="donate__card">
        <h3 class="donate__card-title">Інші способи допомоги</h3>
        <div class="donate__card-content">
          <div class="donate__copy-wrapper">
            <div class="donate__text" id="other-text"><?php the_field('donate_other'); ?></div>
            <button class="donate__copy-btn" data-target="other-text" aria-label="Скопіювати реквізити">
              📋
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const copyButtons = document.querySelectorAll('.donate__copy-btn');

  copyButtons.forEach(button => {
    button.addEventListener('click', function() {
      const targetId = this.getAttribute('data-target');
      const textElement = document.getElementById(targetId);
      if (textElement) {
        const textToCopy = textElement.innerText.trim();
        navigator.clipboard.writeText(textToCopy).then(() => {
          this.classList.add('copied');
          setTimeout(() => this.classList.remove('copied'), 1500);
        });
      }
    });
  });
});
</script>

<?php get_footer(); ?>

BTC: 123abc
ETH: 456def
USDT: 789ghi
```)
или с `<br>` между ними.

---

## 🧩 Готовый `content-pozhertvy.php`

```php
<?php
/* Template Name: Пожертви */
get_header();

/**
 * Универсальная функция вывода списка реквизитов
 * — разбивает текст по переносам строк или <br>
 * — добавляет кнопку 📋 для копирования каждой строки
 */
function render_donate_items($field_name) {
    $raw = get_field($field_name);
    if (!$raw) return;

    // Преобразуем HTML-разрывы в переносы строк и очищаем теги
    $text = str_ireplace(['<br>', '<br/>', '<br />', '</p>'], "\n", $raw);
    $text = strip_tags($text);
    $lines = array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $text)));

    if (empty($lines)) return;

    echo '<div class="donate__list">';
    foreach ($lines as $i => $line) {
        $id = esc_attr($field_name . '-' . $i);
        echo '<div class="donate__item">';
        echo '<div class="donate__text" id="' . $id . '">' . esc_html($line) . '</div>';
        echo '<button class="donate__copy-btn" data-target="' . $id . '" aria-label="Скопіювати реквізити"></button>';
        echo '</div>';
    }
    echo '</div>';
}
?>

<section class="donate">
  <div class="container">
    <h1 class="donate__title"><?php the_field('donate_title'); ?></h1>

    <div class="donate__intro">
      <?php the_field('donate_text'); ?>
    </div>

    <div class="donate__grid">

      <div class="donate__card">
        <h3 class="donate__card-title">Банківські карти</h3>
        <div class="donate__card-content">
          <?php render_donate_items('donate_bank'); ?>
        </div>
      </div>

      <div class="donate__card">
        <h3 class="donate__card-title">Криптовалюта</h3>
        <div class="donate__card-content">
          <?php render_donate_items('donate_crypto'); ?>
        </div>
      </div>

      <div class="donate__card">
        <h3 class="donate__card-title">Інші способи допомоги</h3>
        <div class="donate__card-content">
          <?php render_donate_items('donate_other'); ?>
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
      if (!textElement) return;

      const textToCopy = textElement.textContent.trim();

      // надёжное копирование
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(() => showCopied(this));
      } else {
        const textarea = document.createElement('textarea');
        textarea.value = textToCopy;
        textarea.style.position = 'fixed';
        textarea.style.opacity = '0';
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        showCopied(this);
      }
    });
  });

  function showCopied(button) {
    button.classList.add('copied');
    setTimeout(() => button.classList.remove('copied'), 1500);
  }
});
</script>

<?php get_footer(); ?>

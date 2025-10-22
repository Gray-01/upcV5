<?php
/* Template Name: Пожертви */
get_header();

/**
 * Helper: разбивает текст поля на строки и выводит label + value.
 * Копируется только value (всё, что после первого двоеточия ':').
 */
function upcv5_render_field_lines_copyable( $field_name, $skip_labels = [] ) {
    $raw = get_field( $field_name );
    if ( ! $raw ) return;

    $tmp = str_ireplace( array('<br>', '<br/>', '<br />', '</p>'), "\n", $raw );
    $tmp = strip_tags( $tmp );
    $lines = array_filter( array_map( 'trim', preg_split("/\r\n|\n|\r/", $tmp) ) );

    if ( empty( $lines ) ) return;

    echo '<div class="donate__list">';
    foreach ( $lines as $i => $line ) {
        $parts = explode(':', $line, 2);
        if ( count($parts) === 2 ) {
            $label = trim($parts[0]);
            $value = trim($parts[1]);
        } else {
            $label = trim($parts[0]);
            $value = '';
        }

        // если метка в списке пропускаемых — без кнопки копирования
        $skip = in_array(mb_strtolower($label), $skip_labels, true);

        $id = esc_attr( $field_name . '-' . $i );

        echo '<div class="donate__item">';
        echo '<div class="donate__label">' . esc_html($label);
        if ($value !== '') echo ':';
        echo '</div>';
        if ($value !== '') {
            echo '<div class="donate__value" id="' . $id . '">' . esc_html($value) . '</div>';
        }
        if (!$skip && $value !== '') {
            echo '<button class="donate__copy-btn" data-target="' . $id . '" aria-label="Скопіювати реквізити"></button>';
        }
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

      <!-- Банківські карти -->
      <div class="donate__card">
        <h3 class="donate__card-title">Банківські карти</h3>
        <div class="donate__card-content">
          <?php
          // убираем копирование с трёх строк:
          upcv5_render_field_lines_copyable('donate_bank', [
              mb_strtolower('💳 Visa / MasterCard'),
              mb_strtolower('Парафія Святителя Спиридона'),
              mb_strtolower('Добровільна пожертва')
          ]);
          ?>
        </div>
      </div>

      <!-- Криптовалюта -->
      <div class="donate__card">
        <h3 class="donate__card-title">Криптовалюта</h3>
        <div class="donate__card-content">
          <?php upcv5_render_field_lines_copyable('donate_crypto'); ?>
        </div>
      </div>

      <!-- Інші способи допомоги -->
      <div class="donate__card">
        <h3 class="donate__card-title">Інші способи допомоги</h3>
        <div class="donate__card-content">
          <div class="donate__list">
            <div class="donate__item">
              <div class="donate__label">📦 NovaPay:</div>
              <div class="donate__value" id="other-1">2904 5538 1290 4533</div>
              <button class="donate__copy-btn" data-target="other-1" aria-label="Скопіювати реквізити"></button>
            </div>
            <div class="donate__item">
              <div class="donate__label">🏦 Western Union:</div>
              <div class="donate__value" id="other-2">0045 2298 7741</div>
              <button class="donate__copy-btn" data-target="other-2" aria-label="Скопіювати реквізити"></button>
            </div>
            <div class="donate__item">
              <div class="donate__label">✈ MoneyGram:</div>
              <div class="donate__value" id="other-3">7135 9990 1200 4588</div>
              <button class="donate__copy-btn" data-target="other-3" aria-label="Скопіювати реквізити"></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.donate__copy-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      var id = this.getAttribute('data-target');
      if (!id) return;
      var el = document.getElementById(id);
      if (!el) return;
      var text = el.textContent.trim();
      if (!text) return;

      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(() => flashCopied(btn));
      } else {
        var ta = document.createElement('textarea');
        ta.value = text;
        document.body.appendChild(ta);
        ta.select();
        document.execCommand('copy');
        document.body.removeChild(ta);
        flashCopied(btn);
      }
    });
  });

  function flashCopied(btn) {
    btn.classList.add('copied');
    setTimeout(() => btn.classList.remove('copied'), 1500);
  }
});
</script>

<?php get_footer(); ?>

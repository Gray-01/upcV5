<?php
/* Template Name: Пожертви */
get_header();

/**
 * Helper: разбивает текст поля на строки и выводит label + value.
 * Копируется только value (всё, что после первого двоеточия ':').
 */
function upcv5_render_field_lines_copyable( $field_name ) {
    $raw = get_field( $field_name );
    if ( ! $raw ) return;

    // Преобразуем <br> и </p> в переносы, затем убираем теги лишние (оставим текст)
    $tmp = str_ireplace( array('<br>', '<br/>', '<br />', '</p>'), "\n", $raw );
    $tmp = strip_tags( $tmp );
    $lines = array_filter( array_map( 'trim', preg_split("/\r\n|\n|\r/", $tmp) ) );

    if ( empty( $lines ) ) return;

    echo '<div class="donate__list">';
    foreach ( $lines as $i => $line ) {
        // Разделяем по первому двоеточию
        $parts = explode(':', $line, 2);
        if ( count($parts) === 2 ) {
            $label = trim($parts[0]) . ':';
            $value = trim($parts[1]);
        } else {
            // если двоеточия нет — считаем всю строку value (без label)
            $label = '';
            $value = trim($parts[0]);
        }
        $id = esc_attr( $field_name . '-' . $i );
        echo '<div class="donate__item">';
        if ( $label !== '' ) {
            echo '<div class="donate__label">' . esc_html( $label ) . '</div>';
        }
        echo '<div class="donate__value" id="' . $id . '">' . esc_html( $value ) . '</div>';
        // кнопка копирования копирует только .donate__value по id
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

      <!-- Банківські карти -->
      <div class="donate__card">
        <h3 class="donate__card-title">Банківські карти</h3>
        <div class="donate__card-content">
          <?php upcv5_render_field_lines_copyable('donate_bank'); ?>
        </div>
      </div>

      <!-- Криптовалюта -->
      <div class="donate__card">
        <h3 class="donate__card-title">Криптовалюта</h3>
        <div class="donate__card-content">
          <?php upcv5_render_field_lines_copyable('donate_crypto'); ?>
        </div>
      </div>

      <!-- Інші способи допомоги (заменяем на три цифровых реквизита автоматически) -->
      <div class="donate__card">
        <h3 class="donate__card-title">Інші способи допомоги</h3>
        <div class="donate__card-content">
          <?php
            // Генерируем 3 случайных цифровых реквизита (формат: группы по 4 цифры)
            $random_items = array();
            for ($k = 1; $k <= 3; $k++) {
                $groups = array();
                for ($g = 0; $g < 4; $g++) {
                    $groups[] = str_pad( strval( rand(0, 9999) ), 4, '0', STR_PAD_LEFT );
                }
                $num = implode(' ', $groups); // например: "0123 4567 8901 2345"
                $random_items[] = "Реквізит {$k}: {$num}";
            }
            // Выведем так же как другие поля — с разбиением label:value
            $tmp = implode("\n", $random_items);
            // Временный вывод через ту же функцию: подставим $tmp в render путём временного фильтра
            // проще — распарсим прямо здесь:
            $lines = array_map('trim', preg_split("/\r\n|\n|\r/", $tmp));
            echo '<div class="donate__list">';
            foreach ($lines as $i => $line) {
                $parts = explode(':', $line, 2);
                $label = (count($parts) === 2) ? trim($parts[0]) . ':' : '';
                $value = (count($parts) === 2) ? trim($parts[1]) : trim($parts[0]);
                $id = 'donate_other-' . $i;
                echo '<div class="donate__item">';
                if ($label !== '') echo '<div class="donate__label">' . esc_html($label) . '</div>';
                echo '<div class="donate__value" id="' . esc_attr($id) . '">' . esc_html($value) . '</div>';
                echo '<button class="donate__copy-btn" data-target="' . esc_attr($id) . '" aria-label="Скопіювати реквізити"></button>';
                echo '</div>';
            }
            echo '</div>';
          ?>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Копируем только value по id (textContent)
  document.querySelectorAll('.donate__copy-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      var id = this.getAttribute('data-target');
      if (!id) return;
      var el = document.getElementById(id);
      if (!el) return;
      var text = el.textContent.trim();
      if (!text) return;

      // Современный API с fallback
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(function() {
          flashCopied(btn);
        }, function() {
          fallbackCopy(text, btn);
        });
      } else {
        fallbackCopy(text, btn);
      }
    });
  });

  function fallbackCopy(text, btn) {
    var ta = document.createElement('textarea');
    ta.value = text;
    ta.style.position = 'fixed';
    ta.style.left = '-9999px';
    document.body.appendChild(ta);
    ta.select();
    try {
      document.execCommand('copy');
      flashCopied(btn);
    } catch (e) {
      // ничего
    }
    document.body.removeChild(ta);
  }

  function flashCopied(btn) {
    btn.classList.add('copied');
    setTimeout(function() { btn.classList.remove('copied'); }, 1500);
  }
});
</script>

<?php get_footer(); ?>

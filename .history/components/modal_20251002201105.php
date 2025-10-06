<div class="modal" id="modalInfo" style="display: none;">
  <div class="modal__content">
    <button class="modal__close" id="modalClose">&times;</button>

    <?php
      // Получаем поля с Options Page
      $modal_title   = get_field('modal_title', 'option') ?: 'Наши храмы';
      $modal_content = get_field('modal_content', 'option') ?: 'Здесь можно добавить описание ваших храмов.';
      $modal_image   = get_field('modal_image', 'option');

      // Кнопки
      $buttons = [];
      for($i=1; $i<=5; $i++){
          $text = get_field("modal_btn{$i}_text", 'option');
          $url  = get_field("modal_btn{$i}_url", 'option');
          if($text && $url){
              $buttons[] = ['text'=>$text, 'url'=>$url];
          }
      }
    ?>

    <!-- Заголовок -->
    <h2 class="modal__title"><?php echo esc_html($modal_title); ?></h2>

    <!-- Контент -->
    <div class="modal__text"><?php echo wp_kses_post($modal_content); ?></div>

    <!-- Изображение -->
    <?php if($modal_image): ?>
      <div class="modal__image">
        <img src="<?php echo esc_url($modal_image); ?>" alt="<?php echo esc_attr($modal_title); ?>">
      </div>
    <?php endif; ?>

    <!-- Список кнопок -->
    <?php if($buttons): ?>
      <ul class="modal__list">
        <?php foreach($buttons as $btn): ?>
          <li>
            <a href="<?php echo esc_url($btn['url']); ?>" target="_blank" class="modal__btn">
              <?php echo esc_html($btn['text']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>Кнопки пока не настроены в админке.</p>
    <?php endif; ?>
  </div>
</div>

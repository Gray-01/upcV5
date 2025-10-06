<div class="modal" id="modalInfo" style="display: none;">
  <div class="modal__content">
    <button class="modal__close" id="modalClose">&times;</button>

    <?php
      $modal_title   = get_field('modal_title', 'option');
      $modal_content = get_field('modal_content', 'option');
      $modal_image   = get_field('modal_image', 'option');

      $buttons = [];
      for($i=1; $i<=5; $i++){
          $text = get_field("modal_btn{$i}_text", 'option');
          $url  = get_field("modal_btn{$i}_url", 'option');
          if($text && $url){
              $buttons[] = ['text'=>$text, 'url'=>$url];
          }
      }
    ?>

    <?php if($modal_title): ?>
      <h2 class="modal__title"><?php echo esc_html($modal_title); ?></h2>
    <?php endif; ?>

    <?php if($modal_content): ?>
      <div class="modal__text"><?php echo wp_kses_post($modal_content); ?></div>
    <?php endif; ?>

    <?php if($modal_image): ?>
      <div class="modal__image">
        <img src="<?php echo esc_url($modal_image); ?>" alt="<?php echo esc_attr($modal_title); ?>">
      </div>
    <?php endif; ?>

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
    <?php endif; ?>
  </div>
</div>

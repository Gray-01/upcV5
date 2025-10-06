document.addEventListener('DOMContentLoaded', () => {
  // ===== БУРГЕР МЕНЮ =====
  const burger = document.getElementById('burger');
  const mobileMenu = document.getElementById('mobileMenu');

  if (burger && mobileMenu) {
    burger.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
    });
  }

  // ===== SUBMENU В BURGER =====
  const submenuParents = document.querySelectorAll('.mobile-menu .has-submenu');
  submenuParents.forEach(item => {
    const link = item.querySelector('a');
    if (link) {
      link.addEventListener('click', e => {
        e.preventDefault();
        item.classList.toggle('open');
      });
    }
  });

  // ===== МОДАЛЬНОЕ ОКНО БЕЗ ЧЕРНОГО ФОНА =====
  const openModalBtn = document.getElementById('openModal');
  const modalContent = document.querySelector('.modal__content');
  const closeModalBtn = document.getElementById('modalClose');

  if (openModalBtn && modalContent && closeModalBtn) {
    openModalBtn.addEventListener('click', e => {
      e.preventDefault();
      // Показываем только контент
      modalContent.style.display = 'block';
    });

    closeModalBtn.addEventListener('click', () => {
      modalContent.style.display = 'none';
    });

    // Закрыть при клике вне контента (если вдруг захотим обернуть в отдельный блок)
    document.addEventListener('click', e => {
      if (!modalContent.contains(e.target) && e.target !== openModalBtn) {
        modalContent.style.display = 'none';
      }
    });
  }
});

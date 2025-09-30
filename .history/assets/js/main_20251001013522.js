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
    link.addEventListener('click', e => {
      e.preventDefault(); // чтобы ссылка не срабатывала
      item.classList.toggle('open'); // открытие/закрытие сабменю
    });
  });

  // ===== МОДАЛЬНОЕ ОКНО =====
  const openModalBtn = document.getElementById('openModal');
  const modal = document.getElementById('modalInfo');
  const closeModalBtn = document.getElementById('modalClose');

  if (openModalBtn && modal && closeModalBtn) {
    // открыть модалку
    openModalBtn.addEventListener('click', (e) => {
      e.preventDefault();
      modal.style.display = 'flex';
    });

    // закрыть по кнопке
    closeModalBtn.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    // закрыть при клике вне контента
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  }
});

// 20250929 start galery
// ===== ГАЛЕРЕЯ =====

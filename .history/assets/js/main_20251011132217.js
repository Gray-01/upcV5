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

  // ===== ГАЛЕРЕЯ =====

  const openGallery = document.getElementById('openGallery');
const galleryModal = document.getElementById('galleryModal');
const galleryClose = document.getElementById('galleryClose');
const galleryImage = document.getElementById('galleryImage');
const galleryPrev = document.getElementById('galleryPrev');
const galleryNext = document.getElementById('galleryNext');

let currentIndex = 0;

if (openGallery && galleryModal) {
  // Открыть галерею
  openGallery.addEventListener('click', () => {
    galleryModal.style.display = 'flex';
    galleryImage.src = galleryImages[currentIndex];
  });

  // Закрыть галерею
  if (galleryClose) {
    galleryClose.addEventListener('click', () => {
      galleryModal.style.display = 'none';
    });
  }

  // Листать назад
  if (galleryPrev) {
    galleryPrev.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
      galleryImage.src = galleryImages[currentIndex];
    });
  }

  // Листать вперед
  if (galleryNext) {
    galleryNext.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % galleryImages.length;
      galleryImage.src = galleryImages[currentIndex];
    });
  }

  // Закрыть кликом вне картинки
  galleryModal.addEventListener('click', (e) => {
    if (e.target === galleryModal) {
      galleryModal.style.display = 'none';
    }
  });
}

  // ===== АНИМАЦИЯ СЕКЦИЙ =====
  const sections = document.querySelectorAll("section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        }
      });
    },
    { threshold: 0.15 } // 15% секции видно → включаем анимацию
  );

  sections.forEach((sec) => {
    sec.classList.add("section-animate");
    observer.observe(sec);
  });
});

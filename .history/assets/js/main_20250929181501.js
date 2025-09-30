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
const openGallery = document.getElementById('openGallery');
const galleryModal = document.getElementById('galleryModal');
const galleryClose = document.getElementById('galleryClose');
const galleryImage = document.getElementById('galleryImage');
const galleryPrev = document.getElementById('galleryPrev');
const galleryNext = document.getElementById('galleryNext');

// массив с картинками (20 штук, .png)
const galleryImages = [];
for (let i = 1; i <= 20; i++) {
  galleryImages.push(`assets/images/gallery/${i}.png`);
}

let currentIndex = 0;

if (openGallery && galleryModal) {
  // открыть галерею
  openGallery.addEventListener('click', () => {
    galleryModal.style.display = 'flex';
    galleryImage.src = galleryImages[currentIndex];
  });

  // закрыть галерею
  galleryClose.addEventListener('click', () => {
    galleryModal.style.display = 'none';
  });

  // листать назад
  galleryPrev.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
    galleryImage.src = galleryImages[currentIndex];
  });

  // листать вперед
  galleryNext.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % galleryImages.length;
    galleryImage.src = galleryImages[currentIndex];
  });

  // закрыть кликом вне картинки
  galleryModal.addEventListener('click', (e) => {
    if (e.target === galleryModal) {
      galleryModal.style.display = 'none';
    }
  });
}

// 20250929 start анимация секций
document.addEventListener("DOMContentLoaded", () => {
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


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

  // ===== ГАЛЕРЕЯ =====
  const openGallery = document.getElementById('openGallery');
  const galleryModal = document.getElementById('galleryModal');
  const galleryClose = document.getElementById('galleryClose');
  const galleryImage = document.getElementById('galleryImage');
  const galleryPrev = document.getElementById('galleryPrev');
  const galleryNext = document.getElementById('galleryNext');

  // Проверяем наличие всех необходимых элементов
  if (openGallery && galleryModal && galleryClose && galleryImage && galleryPrev && galleryNext) {
    // массив с картинками
    const galleryImages = [];
    for (let i = 1; i <= 20; i++) {
      galleryImages.push(`${themeData.templateUrl}/assets/images/gallery/${i}.png`);
    }

    let currentIndex = 0;

    // открыть галерею
    openGallery.addEventListener('click', () => {
      if (galleryImages.length > 0) {
        galleryModal.style.display = 'flex';
        galleryImage.src = galleryImages[currentIndex];
      }
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

  // ================== АНИМАЦИЯ СЕКЦИЙ ==================
  const sections = document.querySelectorAll("section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
          // Отписываемся, если анимация должна быть однократной
          // observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15 }
  );

  sections.forEach((sec) => {
    sec.classList.add("section-animate");
    observer.observe(sec);
  });
});
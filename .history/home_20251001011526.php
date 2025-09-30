<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

  <main class="main">

    <section class="hero">

      <img class="hero__img" src="assets/images/baner.png" alt="banner">

      <div class="hero__content">
        <h1 class="hero__title">ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ !</h1>
        <p class="hero__subtitle">ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ</p>
        <a class="hero__contacts" id="openModal" href="#">Наші храми</a>
      </div>


      <!-- modal window start -->
      <div class="modal" id="modalInfo">
        <div class="modal__content">
          <button class="modal__close" id="modalClose">&times;</button>
          <h2 class="modal__title">Наші храми</h2>
          <ul class="modal__list">
            <li>
              <span class="modal__city">Bern</span>
              <a href="https://maps.app.goo.gl/JmonunSstCQb2FVr7" target="_blank" class="modal__btn">Подивитися на
                карті</a>
            </li>
            <li>
              <span class="modal__city">Fribourg</span>
              <a href="https://maps.app.goo.gl/qmQMdpXiHqVzvtvM7" target="_blank" class="modal__btn">Подивитися на
                карті</a>
            </li>
            <li>
              <span class="modal__city">Biel</span>
              <a href="https://maps.app.goo.gl/8g7K2CtbK6m3f5V47" target="_blank" class="modal__btn">Подивитися на
                карті</a>
            </li>
            <li>
              <span class="modal__city">Thun</span>
              <a href="https://maps.app.goo.gl/iXwW9WTH2CvLQxs76" target="_blank" class="modal__btn">Подивитися на
                карті</a>
            </li>
            <li>
              <span class="modal__city">Neuchâtel</span>
              <a href="https://maps.app.goo.gl/iUKzQMLMcEsmEw1FA" target="_blank" class="modal__btn">Подивитися на
                карті</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- modal window end -->

    </section>

  </main>

  <section class="news">

    <div class="container">
      <h1 class="news__title">ВАС ВІТАЄ ГРОМАДА УПЦ У ШВЕЙЦАРІЇ!</h1>
      <h2 class="news__subtitle">ПАРАФІЯ НА ЧЕСТЬ СВВ. ЖІНОК-МИРОНОСИЦЬ</h2>


      <div class="news__wrapper">

        <p class="news__highlight">Дорогі брати та сестри!</p>
        <p class="news__text">
          Повідомляємо вам, що в місті Берн (Швейцарія), з благословення Блаженнійшого Митрополита Київського і всієї
          України Онуфрія, створюється нова церковна громада Української Православної Церкви для наших співвітчизників,
          які проживають або тимчасово перебувають у Швейцарії.
        </p>

        <p class="news__text">
          Нехай храм Божий, вдалечині від нашої Батьківщини, стане нашим надійним, мирним та непохитним прихистком в
          сумну
          годину війни, де ми могли б єдиним серцем та єдиними вустами молитись за наших воїнів, що захищають нашу землю
          і
          наш народ, за наших рідних та близьких.
        </p>
        <p class="news__text">
          Напередодні Великого Дня Пасхи об'єднаємось в спільній молитві до Христа Воскреслого, просячи Його милості до
          нас! Нехай світло Христового Воскресіння подолає темряву гріха в цьому мінливому світі, в наших душах та
          серцях.
        </p>

        <p class="news__highlight">
          Новоствореною громадою опікуватиметься ієрей Олександр Шестопалов.
        </p>
      </div>

      <div class="news__image-wrapper">
        <img class="news__img" src="assets/images/news-img.jpg" alt="Громада УПЦ">
      </div>
    </div>

  </section>

  <section class="schedule">

    <div class="container">
      <div class="schedule__wraper">
        <h2 class="schedule__title">Розклад Богослужінь</h2>

        <ul class="schedule__list">

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">
              читання великого канону читання великого канону читання великого канону
            </span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

          <li class="schedule__item">
            <div class="schedule__datetime">
              <time class="schedule__date">2 квітня</time>
              <time class="schedule__day">неділя</time>
            </div>
            <span class="schedule__event">читання великого канону</span>
            <span class="schedule__time">10:00</span>
            <span class="schedule__place">Берн, Швейцария</span>
          </li>

        </ul>

      </div>


    </div>

  </section>

  <section class="announcements">
    <h2 class="announcements__title">Оголошення</h2>
    <p class="announcements__subtitle">Актуальні події та важливі повідомлення</p>

    <ul class="announcements__list">
      <li class="announcement__item">
        <img class="announcement__img" src="assets/images/announcements-1.png" alt="Святкування Великодня 2025">
        <time class="announcement__date" datetime="2025-04">Квітень 2025</time>
        <h3 class="announcement__title">Святкування Великодня 2025</h3>
        <p class="announcement__desc">
          Детальний розклад святкових богослужінь на Великдень та Світлий тиждень.
        </p>
        <a href="#" class="announcement__link">Читати далі</a>
      </li>

      <li class="announcement__item">
        <img class="announcement__img" src="assets/images/announcements-2.jpg" alt="Благодійна акція">
        <time class="announcement__date" datetime="2025-05">Березень 2025</time>
        <h3 class="announcement__title">Дитяча недільна школа при парафії</h3>
        <p class="announcement__desc">
          Цієї неділі в нашій недільній школі відбулися чудові заняття! Діти дізналися багато нового про зимових птахів.
        </p>
        <a href="#" class="announcement__link">Читати далі</a>
      </li>

      <li class="announcement__item">
        <img class="announcement__img" src="assets/images/announcements-3.jpg" alt="Паломництво до Почаєва">
        <time class="announcement__date" datetime="2025-06">Грудень 2024</time>
        <h3 class="announcement__title">Різдвяні колядки в недільній школі</h3>
        <p class="announcement__desc">
          Сьогодні на заняттях наші дітки співали різдвяні пісні та колядки з викладачем вокальної студії «Тоніка».
        </p>
        <a href="#" class="announcement__link">Читати далі</a>
      </li>
    </ul>

    <div class="announcements__actions">
      <a href="#" class="announcements__button">Читати всі оголошення</a>
    </div>


  </section>

  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title">Контакти</h2>

      <div class="contacts__blocks">

        <!-- 1. Священник -->
        <div class="contacts__block">
          <h3 class="contacts__block-title">Священник</h3>
          <p class="contacts__name">Протоієрей Олександр</p>
          <p class="contacts__phone">+41 79 836 51 72</p>
          <p class="contacts__messengers">WHATSAPP / VIBER</p>
        </div>

        <!-- 2. Соціальні мережі -->
        <div class="contacts__block">
          <h3 class="contacts__block-title">Соціальні мережі</h3>
          <p class="contacts__social">
            <a href="https://t.me/+p-DuuBndikExZmFi" target="_blank">Telegram</a> /
            <a href="https://www.facebook.com/people/%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D1%81%D1%8C%D0%BA%D0%B0-%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0-%D0%B3%D1%80%D0%BE%D0%BC%D0%B0%D0%B4%D0%B0-%D0%B2-%D0%A8%D0%B2%D0%B5%D0%B9%D1%86%D0%B0%D1%80%D1%96%D1%97/100095338009089/"
              target="_blank">Facebook</a>
          </p>
        </div>

        <!-- 3. Графік богослужінь -->
        <div class="contacts__block">
          <h3 class="contacts__block-title">Графік богослужінь</h3>
          <p class="contacts__schedule">Неділя: за розкладом</p>
          <p class="contacts__schedule">Свята: за розкладом</p>
        </div>

      </div>
    </div>
  </section>

  <section class="school">
    <div class="container school__container">
      <div class="school__header">
        <h2 class="school__title">Недільна школа</h2>
        <p class="school__subtitle">Духовне виховання дітей та молоді</p>
      </div>

      <div class="school__content">
        <!-- Левый блок -->
        <div class="school__program">
          <h3 class="school__program-title">Програма занять</h3>
          <ul class="school__list">
            <li>Вивчення основ православної віри</li>
            <li>Читання Святого Письма</li>
            <li>Вивчення церковно-слов'янської мови</li>
            <li>Творчі заняття та майстер-класи</li>
          </ul>
        </div>

        <!-- Правый блок -->
        <div class="school__image-wrap">
          <img src="assets/images/gallery/1.png" alt="Недільна школа" class="school__image" id="openGallery">

        </div>
      </div>
    </div>
  </section>

  <!-- Галерея (модалка) -->
  <div class="gallery" id="galleryModal">
    <span class="gallery__close" id="galleryClose">&times;</span>
    <div class="gallery__content">
      <span class="gallery__prev" id="galleryPrev">&#10094;</span>
      <img class="gallery__img" id="galleryImage" src="assets/images/gallery/1.png" alt="">
      <span class="gallery__next" id="galleryNext">&#10095;</span>
    </div>
  </div>


<?php get_footer(); ?>

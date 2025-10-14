<?php
/*
Template Name: Паломництва
*/
get_header(); ?>

<section class="pilgrimage">
    <div class="container">
        <h1 class="pilgrimage__title">Паломництва</h1>

        <div class="pilgrimage__grid">
            <div class="pilgrimage__card">
                <div class="pilgrimage__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pilgrimage-1.jpg" alt="Паломництво на Корфу" class="pilgrimage__image">
                </div>
                <h2 class="pilgrimage__card-title">ВІДБУЛОСЬ ПАЛОМНИЦТВО НА ОСТРІВ КОРФУ</h2>
                <p class="pilgrimage__text">
                    З 15 по 18 вересня 2025 року відбулася паломницька поїздка парафії святителя Спиридона в Лісабоні
                    на чолі з настоятелем, протоієреєм Віталієм Горзовим, на острів Корфу (Греція)
                    до святителя Спиридона Триміфунтського.
                </p>
                <a href="#" class="pilgrimage__link">читати далі</a>
            </div>

            <div class="pilgrimage__card">
                <div class="pilgrimage__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pilgrimage-2.jpg" alt="Паломництво" class="pilgrimage__image">
                </div>
                <h2 class="pilgrimage__card-title">ПАЛОМНИЦТВО ДО СВЯТИХ МІСЦЬ УКРАЇНИ</h2>
                <p class="pilgrimage__text">
                    Парафіяни відвідали визначні монастирі та святині Києва і Почаєва,
                    зміцнюючи віру та духовне єднання в молитві.
                </p>
                <a href="#" class="pilgrimage__link">читати далі</a>
            </div>

            <div class="pilgrimage__card">
                <div class="pilgrimage__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pilgrimage-3.jpg" alt="Паломництво" class="pilgrimage__image">
                </div>
                <h2 class="pilgrimage__card-title">ПОЇЗДКА ДО ІТАЛІЇ ТА СВЯТИХ МІСЦЬ РИМУ</h2>
                <p class="pilgrimage__text">
                    Віряни парафії відвідали храми Риму, де молилися біля мощей апостолів Петра і Павла,
                    дякуючи Богові за духовну подорож.
                </p>
                <a href="#" class="pilgrimage__link">читати далі</a>
            </div>

            <div class="pilgrimage__card">
                <div class="pilgrimage__image-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pilgrimage-4.jpg" alt="Паломництво" class="pilgrimage__image">
                </div>
                <h2 class="pilgrimage__card-title">ДИТЯЧЕ ПАЛОМНИЦТВО ДО СВЯТИХ МІСЦЬ</h2>
                <p class="pilgrimage__text">
                    Молодші парафіяни здійснили подорож до місць поклоніння,
                    де навчалися історії віри та спільній молитві.
                </p>
                <a href="#" class="pilgrimage__link">читати далі</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

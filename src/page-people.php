<?php
/*
Template Name: Люди
*/
?>

<?php get_header();?>

    <nav aria-label="Главное меню" class="menu">
        <div class="container">
            <ul class="menu-list">
                <li><a href="news.html" class="btn">события</a></li>
                <li><a href="history.html" class="btn btn_color">история</a></li>
                <li><a href="creative.html" class="btn">творчество</a></li>
                <li><a href="#" class="btn">форум</a></li>
            </ul>
        </div>
    </nav>

    <div class="people">
        <div class="container">
            <a href="#">
                <h1 class="title title_link">История в лицах</h1>
            </a>

            <div class="people__wrapper">
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/shekhter-a-p-1902.jpg" alt="Шехтер А.П."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Шехтер</div>
                        <div class="people__name">Александр Петрович</div>
                        <div class="people__years">(1862 – 1923)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/musrepov-gabit-mahmutovich.jpg" alt="Мусрепов Г.М."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Мусрепов</div>
                        <div class="people__name">Габит Махмутович</div>
                        <div class="people__years">(1902 – 1985)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/kobzhasarov-nurmakan-kobzhasarovich.jpg" alt="Кобжасаров Н.К."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Кобжасаров</div>
                        <div class="people__name">Нурмакан Кобжасарович</div>
                        <div class="people__years">(1908 – 1990)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/ermolaev-yuriy-fedorovich.jpg" alt="Ермолаев Ю.Ф."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Ермолаев</div>
                        <div class="people__name">Юрий Фёдорович</div>
                        <div class="people__years">(1926 – 2018)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/kalachev-mihail-pavlovich.jpg" alt="Калачёв М.П."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Калачёв</div>
                        <div class="people__name">Михаил Павлович</div>
                        <div class="people__years">(1921 – 2000)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/merinova-tatyana-dmitrievna.jpg" alt="Меринова Т.Д."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Меринова</div>
                        <div class="people__name">Татьяна Дмитриевна</div>
                        <div class="people__years">(1899 – 1985)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/voropaev-sergey-nikolaevich.jpg" alt="Воропаев С.Н."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Воропаев</div>
                        <div class="people__name">Сергей Николаевич</div>
                        <div class="people__years">(1921 – 1945)</div>
                    </div>
                </a>
                <a href="#" class="people__item">
                    <img src="img/posts/vinichenko-s-n/kizin-pavel-vasilyevich.jpg" alt="Кизин П.В."
                        class="people__img">
                    <div class="people__descr">
                        <div class="people__family">Кизин</div>
                        <div class="people__name">Павел Васильевич</div>
                        <div class="people__years">(1922 – 1991)</div>
                    </div>
                </a>
            </div>

            <button class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">загрузить ещё</button>

            <div class="divider"></div>
        </div>
    </div>

<?php get_footer();?>
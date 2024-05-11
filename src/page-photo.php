<?php
/*
Template Name: Фотографии
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

    <div class="photo">
        <div class="container">

            <h1 class="title">Фотографии</h1>

            <div class="btn__dropdown-wrapper">
                <nav aria-label="Годы" class="btn__dropdown">
                    <button class="btn btn_unhover">Выберите годы</button>
                    <ul class="btn__dropdown-content">
                        <li><a href="#" class="btn btn_lowercase btn_wide">1890-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1900-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1910-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1920-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1930-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1940-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1950-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1960-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1970-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1980-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">1990-е</a></li>
                        <li><a href="#" class="btn btn_lowercase btn_wide">2000-е</a></li>
                    </ul>
                </nav>
            </div>

            <div class="photo__wrapper mt-40">
                <img src="img/gallery/uchilische.jpg" alt="" class="photo__item">
                <img src="img/gallery/hram-1909.jpg" alt="" class="photo__item">
                <img src="img/gallery/mahov-i-krikunov-1916.jpg" alt="" class="photo__item">
                <img src="img/gallery/hram.jpg" alt="" class="photo__item">
                <img src="img/gallery/shkola-fizkabinet-1950.jpg" alt="" class="photo__item">
                <img src="img/gallery/kladenovy.jpg" alt="" class="photo__item">
                <img src="img/gallery/kupecheskaya-semya.jpg" alt="" class="photo__item">
                <img src="img/gallery/kupecheskaya-semya.jpg" alt="" class="photo__item">
                <img src="img/gallery/shkola-fizkabinet-1950.jpg" alt="" class="photo__item">
                <img src="img/gallery/uchilische.jpg" alt="" class="photo__item">
                <img src="img/gallery/kupecheskaya-semya.jpg" alt="" class="photo__item">
            </div>

            <button class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">загрузить ещё</button>

            <div class="divider"></div>
        </div>
    </div>

<?php get_footer();?>
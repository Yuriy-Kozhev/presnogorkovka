<?php
/*
Template Name: История
*/
?>

<?php get_header();?>

    <nav aria-label="Главное меню" class="menu">
        <div class="container">
            <ul class="menu-list">
                <li><a href="#" class="btn">события</a></li>
                <li><a href="history.html" class="btn btn_color">история</a></li>
                <li><a href="creative.html" class="btn">творчество</a></li>
                <li><a href="#" class="btn">форум</a></li>
            </ul>
        </div>
    </nav>

    <section class="photo">
        <div class="container">

            <a href="photo.html">
                <h2 class="title title_link title_mt30">Фотографии</h2>
            </a>

            <div class="photo__wrapper mt-10">
                <img src="img/gallery/uchilische.jpg" alt="" class="photo__item">
                <img src="img/gallery/hram-1909.jpg" alt="" class="photo__item">
                <img src="img/gallery/mahov-i-krikunov-1916.jpg" alt="" class="photo__item">
                <img src="img/gallery/hram.jpg" alt="" class="photo__item">
                <img src="img/gallery/shkola-fizkabinet-1950.jpg" alt="" class="photo__item">
            </div>

            <a href="photo.html" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие фотографии</a>
            
        </div>
    </section>

    <section class="people">
        <div class="container">
            <a href="people.html">
                <h2 class="title title_link">История в лицах</h2>
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

            <a href="photo.html" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие биографии</a>
        </div>
    </section>

    <section class="creative">
        <div class="container">
            <a href="creative.html">
                <h2 class="title title_link">Интересно об истории села</h2>
            </a>
            
            <div class="post-prev__wrapper mt-10">
                
                <div class="post-prev">
                    <a href="#">
                        <img src="img/posts/vinichenko-s-n/pered-imenem-tvoim.jpg" alt="фото" class="post-prev__img">
                    </a>
                    <div class="post-prev__content">
                        <a href="autor.html" class="post-prev__autor">Виниченко Сергей Николаевич</a>
                        <div class="post-prev__title">Перед именем твоим...</div>
                        <p class="post-prev__text">
                            У каждого человека бывают в жизни встречи с теми, кто одним своим присутствием делает его
                            духовный мир богаче и чище, а пространство вокруг – светлее и ярче.
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="#">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-prev">
                    <a href="#"><img src="img/posts/vinichenko-s-n/na-vetrah-vremeni-restavratsiya.jpg" alt="фото"
                            class="post-prev__img"></a>
                    <div class="post-prev__content">
                        <a href="#" class="post-prev__autor">Виниченко Сергей Николаевич</a>
                        <div class="post-prev__title">На ветрах времени. Реставрация</div>
                        <p class="post-prev__text">
                            Церковь стала частью моей жизни с момента осознания себя. Купол храма был хорошо виден в
                            любое время года из окон нашей землянки-пятистенника, исключая морозные дни, когда стекло
                            покрывалось снежными узорами, не таявшими до весны. Здание храма тогда прозывали «пожаркой». Вместо креста из купола торчал странный острый штырь.
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="#">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-prev">
                    <a href="#"><img src="img/posts/vinichenko-s-n/derevenskiy-kvn.jpg" alt="фото"
                            class="post-prev__img"></a>
                    <div class="post-prev__content">
                        <a href="#" class="post-prev__autor">Виниченко Сергей Николаевич</a>
                        <div class="post-prev__title">Деревенский КВН</div>
                        <p class="post-prev__text">
                            С раннего утра неяркое мартовское солнце стремилось пробить окутавший землю белёсый туман.
                            Лишь к вечеру засверкал, наконец, подтаявший снег и открылась взору широкая степная даль за
                            озером с едва различимыми силуэтами одиноких берёз на высокой гриве. Я устроился с чашкой чая перед экраном телевизора, предвкушая очередную победу команды КВН «Уральские пельмени» на пути к финалу.
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="post.html">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-prev">
                    <a href="#"><img src="img/posts/dragunov-m/ne-plyuy-v-kolodets.jpg" alt="фото"
                            class="post-prev__img"></a>
                    <div class="post-prev__content">
                        <a href="#" class="post-prev__autor">Михаил Драгунов</a>
                        <div class="post-prev__title">Не плюй в колодец!</div>
                        <p class="post-prev__text">
                            – Ванюшка наш идёт! Ванюшка! – прокричала Верка, обращаясь к своему мужу, возившемуся во
                            дворе по хозяйству. Верка – властная женщина лет сорока, ростом выше среднего (про таких
                            говорят – каланча), и из-за этого она ходила немного согнувшись, и фигура её напоминала коромысло, отсюда и прозвище – Верка-Коромысло, которое накрепко к ней прилипло.
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="#">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-prev">
                    <a href="#"><img src="img/posts/dragunov-m/gori-ono-ognyom.jpeg" alt="фото"
                            class="post-prev__img"></a>
                    <div class="post-prev__content">
                        <a href="#" class="post-prev__autor">Михаил Драгунов</a>
                        <div class="post-prev__title">Гори оно огнём!</div>
                        <p class="post-prev__text">
                            Проснувшись рано утром, Петрука встал с койки, хотя всё тело противилось тому, а в голове
                            крутились не радостные мысли – сколько дел, с чего начать... Петрука, мужчина средних лет,
                            коренастый, плотный, чуть выше среднего роста, при рождении наречённый Петенькой, а когда
                            вырос, то людская молва прозвала его Петрука
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="#">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="post-prev">
                    <a href="#"><img src="img/posts/vinichenko-s-n/beregis-avtomobilya.jpg" alt="фото"
                            class="post-prev__img"></a>
                    <div class="post-prev__content">
                        <a href="#" class="post-prev__autor">Виниченко Сергей Николаевич</a>
                        <div class="post-prev__title">Берегись автомобиля</div>
                        <p class="post-prev__text">
                            Студенты нашего города дважды в год выходили на улицы и дефилировали мимо огромной,
                            украшенной в соответствии с праздником, трибуны, сооружённой на площади у обкома партии. На
                            верхней её площадке стояли в ряд руководители области, приветствуя проходящих мимо
                            демонстрантов.
                        </p>
                    </div>
                    <div class="post-prev__bottom">
                        <a class="btn" href="#">Читать</a>
                        <div class="post-prev__reactions">
                            <div class="post-prev__likes">
                                <button aria-label="Лайк">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25"
                                        fill="none">
                                        <g clip-path="url(#clip0_432_652)">
                                            <path
                                                d="M15.9312 1.60645C17.2007 1.86035 18.0259 3.0957 17.772 4.36523L17.6597 4.92187C17.4009 6.22559 16.9224 7.46582 16.2534 8.59375H23.2847C24.5786 8.59375 25.6284 9.64355 25.6284 10.9375C25.6284 11.8408 25.1157 12.627 24.3638 13.0176C24.896 13.4473 25.2378 14.1064 25.2378 14.8438C25.2378 15.9863 24.4175 16.9385 23.3384 17.1436C23.5532 17.5 23.6753 17.915 23.6753 18.3594C23.6753 19.3994 22.9966 20.2832 22.0591 20.5859C22.0933 20.7471 22.1128 20.918 22.1128 21.0938C22.1128 22.3877 21.063 23.4375 19.769 23.4375H15.0083C14.0806 23.4375 13.1772 23.1641 12.4058 22.6514L10.5259 21.3965C9.22217 20.5273 8.44092 19.0625 8.44092 17.4951V15.625V13.2812V12.0654C8.44092 10.6396 9.09033 9.29688 10.1987 8.40332L10.5601 8.11523C11.854 7.08008 12.7378 5.625 13.0601 4.00391L13.1724 3.44727C13.4263 2.17773 14.6616 1.35254 15.9312 1.60645ZM2.19092 9.375H5.31592C6.18018 9.375 6.87842 10.0732 6.87842 10.9375V21.875C6.87842 22.7393 6.18018 23.4375 5.31592 23.4375H2.19092C1.32666 23.4375 0.628418 22.7393 0.628418 21.875V10.9375C0.628418 10.0732 1.32666 9.375 2.19092 9.375Z"
                                                fill="#272727" />
                                        </g>
                                        <defs>
                                            <clipPath>
                                                <rect width="25" height="25" fill="white" transform="translate(0.628418)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="post-prev__likes-count">20</div>
                            </div>
                            <a aria-label="Комментарии" href="#" class="post-prev__comments">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 26 26"
                                    fill="none">
                                    <g clip-path="url(#clip0_432_656)">
                                        <path
                                            d="M3.75342 0.5C2.02979 0.5 0.628418 1.90137 0.628418 3.625V17.6875C0.628418 19.4111 2.02979 20.8125 3.75342 20.8125H8.44092V24.7188C8.44092 25.0166 8.60693 25.2852 8.87061 25.417C9.13428 25.5488 9.45166 25.5195 9.69092 25.3438L15.731 20.8125H22.5034C24.2271 20.8125 25.6284 19.4111 25.6284 17.6875V3.625C25.6284 1.90137 24.2271 0.5 22.5034 0.5H3.75342Z"
                                            fill="#272727" />
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="25" height="25" fill="white"
                                                transform="translate(0.628418 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="post-prev__comments-count">5</div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <a href="photo.html" class="btn btn_load-more animate__swing wow" data-wow-duration="1s" data-wow-delay="1s">другие тексты</a>

            <div class="divider"></div>
        </div>
    </section>

<?php get_footer();?>
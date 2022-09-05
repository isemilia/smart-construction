<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="title" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/portfolio-single.min.css">
</head>
<body>

    <header class="header wow animate__animated animate__fadeInDown">
        <div class="container">
            <div class="header__row">
                <div class="header__wrapper">
                    <a href="#" class="header__logo">
                        <img src="icons/logo.png" alt="">
                    </a>
                    <a href="#" class="header__city" data-city>Нур-Султан</a>
                </div>
                <div class="header__mobile" data-header-menu>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item" data-header-menu-item><a href="#service">Сервис</a></li>
                            <li class="menu__item" data-header-menu-item><a href="#product">Продукция</a></li>
                            <li class="menu__item" data-header-menu-item><a href="#banner">Efaflex</a></li>
                            <li class="menu__item" data-header-menu-item><a href="#projects">Портфолио</a></li>
                            <li class="menu__item" data-header-menu-item><a href="#contacts">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="header__social">
                        <a href="#" class="header__social-link">
                            <img src="icons/instagram.svg" alt="" class="">    
                        </a>
                        <a href="#" class="header__social-link">
                            <img src="icons/152810.svg" alt="" class="">    
                        </a>
                        <a href="#" class="header__social-link">
                            <img src="icons/59439.svg" alt="" class="">    
                        </a>
                        <a href="#" class="header__social-link">
                            <img src="icons/whatsapp.svg" alt="" class="">    
                        </a>
                    </div>
                    <a href="#" class="btn header__btn" data-popup-trigger>Оставить заявку</a>
                </div>                    
                <div class="header__hamburger" data-hamburger>
                    <svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="25" height="3" rx="1.5" fill="black"/>
                        <rect y="6" width="25" height="3" rx="1.5" fill="black"/>
                        <rect y="6" width="25" height="3" rx="1.5" fill="black"/>
                        <rect y="12" width="25" height="3" rx="1.5" fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <main class="main">

        <div id="preloader"></div>

        <section class="single">
            <div class="container">
                <div class="single__top">
                    <h1 class="title single__title">Нур-Султан ТРЦ «КЕРУЕН»</h1>
                    <a href="#" class="single__next">
                        <span>Следующий проект</span>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12.5H20" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 6.5L20 12.5L14 18.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                    </a>
                </div>

                <div class="single__wrapper">
                    <div class="swiper single__slider" id="singleSlider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide single__slide">
                            <div class="single__img">
                                <img src="img/SFT_007.jpg" alt="">
                            </div>
                          </div>
    
                          <div class="swiper-slide single__slide">
                            <div class="single__img">
                                <img src="img/SFT_007.jpg" alt="">
                            </div>
                          </div>
    
                          <div class="swiper-slide single__slide">
                            <div class="single__img">
                                <img src="img/SFT_007.jpg" alt="">
                            </div>
                          </div>
    
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination" id="singlePag"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev" id="singlePrev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 12H4" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 18L4 12L10 6" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                    </div>
                    <div class="swiper-button-next" id="singleNext">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12H20" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 6L20 12L14 18" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                            
                    </div>
                </div>

                <div class="single__text">
                    <p>Установлены маятниковые двери, скоростные и промышленные рулонные ворота.</p>
                    <p>Текст - описание проекта.</p>
                </div>
            </div>
        </section>

        <section class="contacts" id="contacts">
            <div class="container">
                <div class="contacts__grid">
                    <div class="contacts__side wow animate__animated animate__fadeInUp">
                        <h2 class="contacts__title">Контакты</h2>
                        <address class="contacts__address" data-address-nursultan>Нур-Султан, <br> Коргалжинское шоссе 19, <br> БЦ «Коргалжын», офис 202В</address>
                        <address class="contacts__address" style="display: none;" data-address-almaty>Алматы, <br> проспект Назарбаева 65, <br> офис 502</address>
                        <div class="contacts__phone">
                            Телефоны: <br>
                            <a href="tel:+77017700896">+7-701-770-08-96</a>, <br>
                            <a href="tel:+77027333390">+7-702-733-33-90</a>.
                        </div>
                        <div class="contacts__email">
                            Электронный адрес: <br>
                            <a href="mailto:smartconstruction.kz@gmail.com">smartconstruction.kz@gmail.com</a>
                        </div>
                        <div class="contacts__group">
                            <div class="contacts__social">
                                <a href="#" class="contacts__social-link">
                                    <img src="icons/instagram.svg" alt="" class="">    
                                </a>
                                <a href="#" class="contacts__social-link">
                                    <img src="icons/152810.svg" alt="" class="">    
                                </a>
                                <a href="#" class="contacts__social-link">
                                    <img src="icons/59439.svg" alt="" class="">    
                                </a>
                                <a href="#" class="contacts__social-link">
                                    <img src="icons/whatsapp.svg" alt="" class="">    
                                </a>
                            </div>
                            <a href="#" class="btn contacts__btn" data-popup-trigger>Оставить заявку</a>
                        </div>
                    </div>
                    <div class="contacts__map wow animate__animated animate__fadeInUp">
                        <iframe data-map-nursultan src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d322383.12462258356!2d70.4023315602378!3d50.85675477229853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586ecb190253b%3A0xc3a5089c4240e3fe!2z0JHQuNC30L3QtdGBINCm0LXQvdGC0YAgIktvcmdhbHpoeW4i!5e0!3m2!1sen!2skz!4v1653999661042!5m2!1sen!2skz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <iframe data-map-almaty src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.4182124184576!2d76.94309355125682!3d43.26361357903422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e990a30cc2d%3A0x3726bc9b6113a4a9!2zNTAyLCDQtNC-0LwgNjUsIEFsbWF0eSAwNTAwMDA!5e0!3m2!1sen!2skz!4v1654573859496!5m2!1sen!2skz" style="border:0; display: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <div class="popup" data-popup>
            <div class="popup__overlay">
                <div class="popup__card">
                    <div class="popup__close" data-popup-close>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.627" height="22.627" viewBox="0 0 22.627 22.627">
                            <g id="Rectangle_78" data-name="Rectangle 78" transform="translate(19.799) rotate(45)" fill="#707070" stroke="#707070" stroke-width="1">
                              <rect width="4" height="28" stroke="none"/>
                              <rect x="0.5" y="0.5" width="3" height="27" fill="none"/>
                            </g>
                            <g id="Rectangle_79" data-name="Rectangle 79" transform="translate(0 2.828) rotate(-45)" fill="#707070" stroke="#707070" stroke-width="1">
                              <rect width="4" height="28" stroke="none"/>
                              <rect x="0.5" y="0.5" width="3" height="27" fill="none"/>
                            </g>
                        </svg>
                    </div>
                    <div class="popup__title">Как начать <br> сотрудничество?</div>
                    <div class="popup__text">Мы умеем воплощать самые смелые проекты в жизнь. <br> У нас есть решение для любой задачи.</div>
                    <form class="popup__form">
                        <input placeholder="Ваше имя" type="text" name="name" id="popupFormName">
                        <input placeholder="Телефон" type="tel" name="tel" id="popupFormTel">
                        <input type="submit" value="Оставить заявку">
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/portfolio-single.js"></script>
</body>
</html>
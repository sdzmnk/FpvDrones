<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/Main.css">

    <title>Головна</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <nav class="nav">
                <div class="burger__container">
                    <div class="burger__block">
                        <div class="burder__logo_block">
                            <div class="burder__logo_wrapper">
                                <div class="burger__1"></div>
                                <div class="burger__2"></div>
                                <div class="burger__3"></div>
                            </div>
                        </div>
                        <img class="header__logo " src="/img/logo-title.png"/>
                        <a class="burger__profile" href="/html/MyProfile.html"><img src="/img/user accountIcons.png" alt=""></a>
                    </div>
                    <div class="burger__block2">
                        <ol class='header__ol1'>
                            <li class="header__li1"><a href="/html/Main.html" class="">Головна</a></li>
                            <li class="header__li1"><a href="#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <img class="header__logo header__logo_off" src="/img/logo-title.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="" class="">Головна</a></li>
                    <li class="header__li"><a href="#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="#footer" class="">Контакти</a></li>
                    <li class="header__li">
                        @auth
                            <a href="{{ route('dashboard') }}"><img src="/img/user accountIcons.png" alt=""></a>
                        @else
                            <a href="{{ route('register') }}"><img src="/img/user accountIcons.png" alt=""></a>
                        @endauth
                    </li>
                </ol>
            </nav>
            <section class="header__section">
                <div class="">
                    <div>
                        <h1 class="">Українська Фабрика Дронів</h1>
                    </div>
                    <p class="">Збираємо FPV-дрони та<br>допомогаємо українським військовим</p>
                    <div>
                        <button class=""><a href="#help" class="">Допомогти</a></button>
                    </div>
                </div>
            </section>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__container">
                    <div class="section1_oneText">100+</div>
                    <div class="section1_twoText">FPV дрони виготовили</div>
                </div>
                <div class="section1__container">
                    <div class="section1_oneText">20+</div>
                    <div class="section1_twoText">людей навчили виготовляти</div>
                </div>
                <div class="section1__container">
                    <div class="section1_oneText">10+</div>
                    <div class="section1_twoText">майстер-класів і презентацій<br>провели</div>
                </div>
            </section>
            <section id="aboutUs" class="main__section2">
                <div class="section2__container">
                    <h1 class="section2__title">Про нас</h1>
                    <div class="section2__bloc_text">
                        <div class="swiper mySwiper1">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <div class="section2__container_text">
                                    <p class="section2__text">Ми команда волонтерів, виробляємо FPV-дронди для українських
                                        військових. </p>
                                    <p class="section2__text">Частину зібраних коштів використовуємо для закупівлі
                                        коплектуючих до дронів, закриваємо також інші цільові потреби підрозділів
                                        передаючи мавіки, та ін.</p>
                                    <p class="section2__text">Наша мета - максимізувати користь кожного донату: саме тому ми
                                        збираємо та тестуємо дрони власноруч, закуповуємо комплектуючі без витрат на
                                        розмитнення завдяки людям, що замовляють деталі самостійно. </p>
                                    <p class="section2__text">Ми активно проводимо майстеркласи та навчаємо людей збирати
                                        дрони.</p>
                                    <div class="section2__block_photo">
                                        <div>
                                            <img src="/img/smile-1.png" alt="">
                                        </div>
                                        <div>
                                            <img src="/img/smile-2.png" alt="">
                                        </div>
                                        <div>
                                            <img src="/img/smile-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class='section2__container_text'>
                                    <div class="section2__block_photo">
                                        <div>
                                            <img src="/img/section2_photo4.png" alt="">
                                        </div>
                                        <div>
                                            <img src="/img/section2_photo5.png" alt="">
                                        </div>

                                    </div>
                                    <p class="section2__text">Ми прагнемо допомогати більше: покривати більше запитів
                                        військових командирів та передавати більше дронів військовим.</p>
                                    <p class="section2__text">Для реалізації цієї ідеї ми ініціюємо проект де кожен може
                                        долучитись до допомоги: не просто грошовий донат, а влосноруч придбана деталь,
                                        частина майбутнього FPV-дрона! </p>
                                    <p class="section2__text">Замовляйте комплектуючі на AliExpress за нашими інструкції та
                                        надсилайте нам.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider1__click">
                    <img class="button-next" src="/img/трілка сіра.png" alt="">
                    <div  class="pagination"></div>
                    <img class="button-prev" src="/img/стрілка чорна.png" alt="">
                </div>
            </section>
            <div class="gradient">
                <section id="help" class="main__section3">
                    <p class="section3__title">Як допомогти?</p>
                    <div class="section3__container">
                        <div class="section3__block1">
                            <p class="section3__block_title">Замовити деталь самостійно</p>
                            <div class="section3__block_text">
                                <p class="section3__text1 p1">1</p>
                                <p class="section3__text2">Оберіть деталі на зручну для вас суму <br> на сайті. Натисніть
                                    'Хочу придбати'.</p>
                            </div>
                            <div class="section3__block_text">
                                <p class="section3__text1">2</p>
                                <p class="section3__text2">Замовте самостійно обрані деталі<Br>на AliExpress.com (ми
                                    надаємо<Br> посилання на деталі).</p>
                            </div>
                            <div class="section3__block_text">
                                <p class="section3__text1">3</p>
                                <p class="section3__text2">Підтвердіть придбання деталей на<br> нашому сайті.</p>
                            </div>
                            <div class="section3__block_text section3__margin_bottom">
                                <p class="section3__text1">4</p>
                                <div class="section3__block_text1">
                                    <p class="section3__text2">Оберіть деталі на зручну для вас суму<br> на сайті. Натисніть
                                        'Хочу придбати'.</p>
                                    <p class="section3__text3">Свистович Андрій<br>096 458 4220<Br>м. Львів<br>віділення НП
                                        </vr>
                                    </p>
                                </div>
                            </div>
                            <button class="section3__button">Замовити деталі</button>
                        </div>
                        <div class="section3__block2">
                            <p class="section3__block2_title">Реквізити прямої допомоги</p>
                            <div class="section3__block2_text_block">
                                <p class="section3__block2__text1">monobank</p>
                                <div class="section3__block2_addMoney1 ">
                                    <a class="section3__block2__link" href="/">Задонатити</a>
                                </div>
                            </div>
                            <div class="section3__block2_text_block1">
                                <p class="section3__block2__text1">Переказ на карту</p>
                                <div class="section3__block2_addMoney2">
                                    <p id="textToCopy_1" class="section3__block2_text3">5375411201866162</p>
                                    <div>
                                        <img src="/img/стрілка.png" alt="">
                                        <p id="buttonCopy_1" class="section3__block2_text2">Скопіювати</p>
                                    </div>
                                </div>
                            </div>
                            <div class="section3__block2_text_block1">
                                <p class="section3__block2__text1">Переказ на карту</p>
                                <div class="section3__block2_addMoney2">
                                    <p id="textToCopy_2" class="section3__block2_text3">asvystov@gmail.com</p>
                                    <div>
                                        <img src="/img/стрілка.png" alt="">
                                        <p id="buttonCopy_2" class="section3__block2_text2">Скопіювати</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="needItem" class="main__section4">
                    <div class="section4__container">
                        <div class="section4__block">
                            <p class="section4__block_text">Необхідні комплектуючі</p>
                            <div>
                                <img class="prevButton section4__photo" src="/img/трілка сіра.png" alt="" class="">
                                <img class="nextButton section4__photo" src="/img/стрілка чорна.png" alt="" class="">
                            </div>
                        </div>
                        <div class="section4__block2">
                            <button class="tenn__button">Teen Dragon</button>
                            <button class="baby__button">Baby Dragon</button>
                        </div>
                        <div class="section4__block3">
                            <div style="display: block;" class="swiper mySwiper swiper__active-1">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide1 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide1.png" alt="" class="">
                                            </div>
                                            <!-- <img src="/img/Slide1.png" alt="" class=""> -->
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Контроллер</p>
                                                    <p class='block3__price_slide'>2555-4240грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: Mamba F722</p>
                                                <p>MK4 APP</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide2 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide2.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Карбон на раму</p>
                                                    <p class='block3__price_slide'>245-1845грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: Apex/Apex HD<br>Модель: 7 inch</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide3 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide3.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Мотори, 4 шт</p>
                                                    <p class='block3__price_slide'>1130-4120грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: Brotherhobby</p>
                                                <p>3008</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide4 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide4.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Радіоприймач(1)</p>
                                                    <p class='block3__price_slide'>885-1165грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: TBS Crossfire</p>
                                                <p>Nano RX</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide4 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide4.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Радіоприймач(1)</p>
                                                    <p class='block3__price_slide'>885-1165грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: TBS Crossfire</p>
                                                <p>Nano RX</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div style="display: none;"  class="swiper mySwiper swiper__active-2">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide1 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide 5.png" alt="" class="">
                                            </div>
                                            <!-- <img src="/img/Slide1.png" alt="" class=""> -->
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Контроллер </p>
                                                    <p class='block3__price_slide'>1330-2240грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: SpeedyBee F405</p>
                                                <p>V3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide2 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide 6.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Рама</p>
                                                    <p class='block3__price_slide'>720-1070грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: Apex/Apex HD</p>
                                                <p>Модель: 7 inch</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide3 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide 7.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Мотори, 4 шт</p>
                                                    <p class='block3__price_slide'>2695-2790грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: Brotherhobby</p>
                                                <p>3008</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide4 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide4.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Радіоприймач(1)</p>
                                                    <p class='block3__price_slide'>885-1165грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: TBS Crossfire</p>
                                                <p>Nano RX</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide4 section4__block3_content">
                                        <div class="section4__block3__slide">
                                            <div class="block3__slide-img">
                                                <img src="/img/Slide4.png" alt="" class="">
                                            </div>
                                            <div class='block3__slide_subtext'>
                                                <p>Необхідно: 10</p>
                                                <p>Зібрано: 0</p>
                                            </div>
                                            <div class='block3__slide_subtext2'>
                                                <div>
                                                    <p class='block3__name_slide'>Радіоприймач(1)</p>
                                                    <p class='block3__price_slide'>885-1165грн</p>
                                                </div>
                                                <img class="clickCircle" src="/img/sircleEmptyXl.png" alt="" data-status="empty">
                                            </div>
                                            <div class='block3__slide_subtext3'>
                                                <p>Запчастина: TBS Crossfire</p>
                                                <p>Nano RX</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                        <div class="section4__slide_button">
                            <img class="prevButton section4__photo" src="/img/трілка сіра.png" alt="" class="">
                            <img class="nextButton section4__photo" src="/img/стрілка чорна.png" alt="" class="">
                        </div>
                        <div class="section4__subSlideInfo">
                            <div>
                                <a href="/html/Instruction.html">Хочу придбати</a>
                            </div>
                            <p>При перевищенні цінності Вашого замовлення понад 150 EUR,<br>
                                буде нараховано мито в розмірі 10% і ПДВ в розмірі 20% від вартості посилки.
                            </p>
                            <div>
                                <a href="/html/Instruction.html">Хочу придбати</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="photoReport" class="main__section5">
                    <div class="section5__container">
                        <div class="section5__block_info">
                            <p class="section5__block_title">Фотозвіт</p>
                            <div class="section5__look-more">
                                <a href="/html/ReportPhoto.html" name="photo" id="link2" class="">Дивитися більше</a>
                                <img src="/img/стрілка чорна.png" alt="">
                            </div>
                        </div>
                        <div class="section5__block_photo">
                            <img src="/img/photoReport1.png" alt="">
                            <img src="/img/photoReport2.png" alt="">
                            <img src="/img/photoReport3.png" alt="">
                            <img src="/img/photoReport4.png" alt="">

                        </div>
                        <div class="section5__look-more1">
                            <a href="/html/ReportPhoto.html" class=""><span>Дивитися більше</span><img src="/img/стрілка чорна.png" alt=""></a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer id="footer" class="footer">
            <div>
                <img class="header__logo " src="/img/logo-title.png"/>
                <div class="footer_wrapper">
                    <ol class="footer__list1">
                        <li>Дані для переадресації посилки:</li>
                        <li>Свистович Андрій</li>
                        <li>098 458 4220</li>
                        <li>м.Львів</li>
                        <li>Відділення НП</li>
                    </ol>
                    <ol class="footer__list2">
                        <ol class="footer__list2">
                            <li><a href="/html/Main.html" class="">Головна</a></li>
                            <li><a href="/html/Main.html#aboutUs" class="">Про нас</a></li>
                            <li><a href="/html/Main.html#help" class="">Як допомогти</a></li>
                            <li><a href="/html/Main.html#needItem" class="">Необхідні комплектуючі</li>
                            <li><a href="/html/Main.html#photoReport" class="">Фотозвіт</a></li>
                            <li><a href="#footer" class="">Контакти</a></li>
                        </ol>
                    </ol>
                </div>
            </div>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
          loop: true,
        //   pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //   },
          navigation: {
            nextEl: ".nextButton",
            prevEl: ".prevButton",
          },
            breakpoints: {
            0:{
                slidesPerView: 1
            },
            320:{
                slidesPerView: 1
            },
            480:{
                slidesPerView: 3
            },
            700:{
                slidesPerView: 4,
                spaceBetween: 15,
            },
            1200:{
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1682: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            3500: {
                slidesPerView: 4,

            }
        }
    },
        );
    </script>
    <script>
        var swiper = new Swiper(".mySwiper1", {

          slidesPerView: 2,
          spaceBetween: 30,
          loop: true,
          pagination: {
            el: ".pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
          },
          breakpoints: {
            0:{
                slidesPerView: 1
            },
            300:{
                slidesPerView: 1
            },
            500:{
                slidesPerView: 1
            },
            737:{
                slidesPerView: 2
            },
            1000:{
                slidesPerView: 2,
            },
        }
        });
      </script>
</body>

</html>

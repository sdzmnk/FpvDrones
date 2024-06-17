<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
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
                        <img class="header__logo " src="/storage/media/logo-title.png"/>
                            @auth
                                <a href="{{ route('dashboard') }}"><img src="/storage/media/user accountIcons.png" alt=""></a>
                            @else
                                <a href="{{ route('register') }}"><img src="/storage/media/user accountIcons.png" alt=""></a>
                            @endauth
                    </div>
                    <div class="burger__block2">
                        <ol class='header__ol1'>
                            <li class="header__li1"><a href="{{route('main')}}" class="">Головна</a></li>
                            <li class="header__li1"><a href="#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <img class="header__logo header__logo_off" src="/storage/media/logo-title.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{ route('main')}}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                    <li class="header__li">
                        @auth
                            <a href="{{ route('dashboard') }}"><img src="/storage/media/user accountIcons.png" alt=""></a>
                        @else
                            <a href="{{ route('register') }}"><img src="/storage/media/user accountIcons.png" alt=""></a>
                        @endauth
                    </li>
                </ol>
            </nav>
            <section class="header__section" id="header">
                <div class="">
                    <?php
                    echo $contentData['header']
                    ?>
                </div>
            </section>
        </header>


        <main class="main">
            <section id="overAboutUs" class="main__section1" id="overAboutUs" >
                <?php
                    echo $contentData['overAboutUs']
                ?>
            </section>

            <section id="aboutUs" class="main__section2">
                    <?php
                        echo  $contentData['aboutUs']
                    ?>
            </section>
            <div class="gradient">
                <section id="help" class="main__section3">
                    <div class="section2__container">
                        <?php
                            echo  $contentData['help']
                        ?>
                    </div>
                </section>

               <section id="needItem" class="main__section4">
                    <div class="section4__container">

                        <?php
                            echo $contentData['needItemTop']
                        ?>

                        <div class="section4__block2">
                            @foreach ($drones as $drone)
                                <button class="drone__button" style="background: black; color: white;" data-drone-id="{{ $drone->id }}">{{ $drone->name }}</button>
                            @endforeach
                        </div>

                        <div class="section4__block3">
                            @foreach ($drones as $drone)
                                <div style="display: none;" class="swiper mySwiper swiper__active-{{ $drone->id }}">
                                    <div class="swiper-wrapper">
                                        @foreach ($drone->details as $detail)
                                            <div class="swiper-slide" data-detail-id="{{ $detail->id }}">
                                                <div class="slide1 section4__block3_content">
                                                    <div class="section4__block3__slide">
                                                        <div class="block3__slide-img">
                                                            <img src="{{ $detail->img }}" alt="" class="">
                                                        </div>
                                                        <div class='block3__slide_subtext'>
                                                            <p>Необхідно: {{ $detail->need }}</p>
                                                            <p>Зібрано: {{ $detail->collected }}</p>
                                                        </div>
                                                        <div class='block3__slide_subtext2'>
                                                            <div>
                                                                <p class='block3__name_slide'>{{ $detail->description }}</p>
                                                                <p class='block3__price_slide'>{{ number_format($detail->min_price, 0, '.', '') }} - {{ number_format($detail->max_price, 0, '.', '') }} грн</p>
                                                            </div>
                                                            <img class="clickCircle" src="/storage/media/sircleEmptyXl.png" alt="" data-status="empty">
                                                        </div>
                                                        <div class='block3__slide_subtext3'>
                                                            <p>Запчастина: {{ $detail->name }}</p>
                                                            <p>Модель: {{ $detail->model }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            @endforeach
                        </div>

                        <div class="section4__slide_button">
                            <img class="prevButton section4__photo" src="/storage/media/трілка сіра.png" alt="" class="">
                            <img class="nextButton section4__photo" src="/storage/media/стрілка чорна.png" alt="" class="">
                        </div>
                        <div class="section4__subSlideInfo">
                            <div>
                                <a href="{{ route('instruction.index') }}">Хочу придбати</a>
                            </div>
                            <?php
                                echo $contentData['needItemBottom']
                            ?>
                            <div>
                                <a href="{{ route('instruction.index') }}">Хочу придбати</a>
                            </div>
                        </div>



                    </div>
                </section>



                <section id="photoReport" class="main__section5">
                    <div class="section5__container">
                        <div class="section5__block_info">
                            <p class="section5__block_title">Фотозвіт</p>
                            <div class="section5__look-more">
                                <a href="{{ route('report_photo.index') }}" name="photo" id="link2" class="">Дивитися більше</a>
                                <img src="/storage/media/стрілка чорна.png" alt="">
                            </div>
                        </div>
                        @foreach ($galleries as $gallery)
                            <div class="section5__block_photo">
                                @foreach ($gallery->photos_to_gallery as $photo)
                                    <img src="{{ $photo->img }}" alt="">
                                @endforeach
                            </div>
                        @endforeach

                        <div class="section5__look-more1">
                            <a href="{{ route('report_photo.index') }}" class=""><span>Дивитися більше</span><img src="/storage/media/стрілка чорна.png" alt=""></a>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer id="footer" class="footer">
            <div>
                <img class="header__logo " src="/storage/media/logo-title.png"/>
                <div class="footer_wrapper">
                    <?php
                        echo $contentData['footer']
                    ?>
                    <ol class="footer__list2">
                        <ol class="footer__list2">
                            <li><a href="{{ route('main') }}" class="">Головна</a></li>
                            <li><a href="#aboutUs" class="">Про нас</a></li>
                            <li><a href="#help" class="">Як допомогти</a></li>
                            <li><a href="#needItem" class="">Необхідні комплектуючі</li>
                            <li><a href="#photoReport" class="">Фотозвіт</a></li>
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



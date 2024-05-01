<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/ReportPhoto.css">
    <title>ReportPhoto</title>
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
                        <h1 class="header__liFirst1">DragonLab<br>DRONES</h1>
                        <a class="burger__profile" href="/html/MyProfile.html"><img src="/img/user accountGREEN.png" alt=""></a>
                    </div>
                    <div class="burger__block2">
                        <ol class='header__ol1'>
                            <li class="header__li1"><a href="{{ route('main') }}" class="">Головна</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <h1 class="header__liFirst">DragonLab<br>DRONES</h1>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{ route('main') }}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#footer" class="">Контакти</a></li>
                    <li class="header__li"><img src="/img/user accountGREEN.png" alt=""></li>
                </ol>
            </nav>
            <div class="header__navigation">
                <a href="">Головна /</a>
                <a href="">Фотозвіт</a>
            </div>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__container">
                    <div class="section1__block_info">
                        <p class="section1__block_title">Фотозвіт</p>
                        <div>
                            <img src="/img/стрілка чорна.png" alt="">
                            <a href="{{ route('main') }}#photoReport" class="">Назад</a>
                        </div>
                    </div>
                    <div class="section1__block_photo">
                        <div class="section1__wrapper_photo">
                            <img class="section1__photo1" src="/img/photoReport1.png" alt="">
                            <img class="section1__photo2" src="/img/photoReport2.png" alt="">
                            <img class="section1__photo3" src="/img/photoReport3.png" alt="">
                            <img class="section1__photo4" src="/img/photoReport4.png" alt="">
                            <img class="section1__photo5" src="/img/photoReport5.png" alt="">
                            <img class="section1__photo6" src="/img/photoReport6.png" alt="">
                            <img class="section1__photo7" src="/img/photoReport7.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer id="footer" class="footer">
            <div>
                <p class="header__liFirst">DragonLab<br>DRONES</p>
                <div class="footer_wrapper">
                    <ol class="footer__list1">
                        <li>Дані для переадресації посилки:</li>
                        <li>Свистович Андрій</li>
                        <li>098 458 4220</li>
                        <li>м.Львів</li>
                        <li>Відділення НП</li>
                    </ol>
                    <ol class="footer__list2">
                        <li><a href="{{ route('main') }}" class="">Головна</a></li>
                        <li><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                        <li><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                        <li><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                        <li><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                        <li><a href="{{ route('main') }}#footer" class="">Контакти</a></li>

                    </ol>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/Instuction.js"></script>
</body>
</html>

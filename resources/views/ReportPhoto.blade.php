<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/ReportPhoto.css">
    <title>Фотозвіт</title>
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
                        <a class="burger__profile" href="{{ route('main') }}"><img class="header__logo " src="/storage/media/logo-title_Green.png"/></a>
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

                <img class="header__logo " src="/storage/media/logo-title_Green.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{ route('main') }}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#footer" class="">Контакти</a></li>
                    <li class="header__li">
                        @auth
                            <a href="{{ route('dashboard') }}"><img src="/storage/media/user accountGREEN.png" alt=""></a>
                        @else
                            <a href="{{ route('register') }}"><img src="/storage/media/user accountGREEN.png" alt=""></a>
                        @endauth
                    </li>
                </ol>
            </nav>
            <div class="header__navigation">
                <a href="{{ route('main') }}">Головна /</a>
                <a href="">Фотозвіт</a>
            </div>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__container">
                    <div class="section1__block_info">
                        <p class="section1__block_title">Фотозвіт</p>
                        <div>
                            <img src="/storage/media/стрілка чорна.png" alt="">
                            <a href="{{ route('main') }}#photoReport" class="">Назад</a>
                        </div>
                    </div>
                    <div class="section1__block_photo">
                        <div class="section1__wrapper_photo">
                            @foreach ($galleries as $gallery)
                                @foreach ($gallery->photos_to_gallery as $index =>$photo)
                                    <img class="section1__photo{{ $index + 1 }}"+ src="{{ $photo->img }}" alt="">
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer id="footer" class="footer">
            <div>
                <img class="header__logo " src="/storage/media/logo-title.png"/>
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
    <script src="/js/Instruction.js"></script>
</body>
</html>

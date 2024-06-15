<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/MyProfile.css">
    <title>Особистий кабінет</title>
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
                        <img class="header__logo " src="/storage/media/logo-title_Green.png"/>
                        <a class="burger__profile" href="{{ route('dashboard') }}">
                            <img src="/storage/media/userAccountBgGreen.png"alt="">
                        </a>
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

                <img class="header__logo header__logo_off" src="/storage/media/logo-title_Green.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{ route('main') }}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#footer" class="">Контакти</a></li>
                    <li class="header__li"><a class="last_a" href="{{ route('dashboard') }}"><span>{{ auth()->user()->name }}</span> <img src="/storage/media/user accountGREEN.png" alt=""></a></li>
                </ol>
            </nav>
            <div class="header__navigation">
                <a href="{{ route('main') }}">Головна /</a>
                <p>Особистий кабінет </p>
            </div>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__wrapper">
                    <div class="section1__block">
                        <h1 class="section1__title">Моя допомога</h1>
                        <div class="section1__changeProfile_block">
                            <a href="{{ route('profile.edit') }}" class="section1__changeProfile">Редагувати профіль</a>
                        </div>
                        <div  class="section1__changeProfile_block" style="margin-top: 20px;">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                                    style="color: white; text-decoration: none;"  class="section1__changeProfile">
                                    {{ __('Вийти') }}
                                </a>
                            </form>
                        </div>
                    </div>
                    <div class="section1__block2">
                        <div class="section1__historyOrder_block">
                            <p class="section1__historyOrder">Історія замовленнь</p>
                        </div>

                        <div class="section1__block2__container">
                            @foreach ($orders as $order)
                                <div class="section1__block2_order">
                                    <ol class="section1__ol_1">
                                        <li>{{ \Carbon\Carbon::parse($order->date)->format('d/m/Y') }}</li>
                                        @foreach ($order->order_lines as $orderLine)
                                            <li>{{ $orderLine->detail->description }}</li>
                                        @endforeach
                                    </ol>
                                    <ol class="section1__ol_2">
                                            <li>.</li>
                                        @foreach ($order->order_lines as $orderLine)
                                            <li>{{ $orderLine->quantity_of_detail }} шт</li>
                                        @endforeach
                                    </ol>
                                </div>
                            @endforeach
                        </div>
                </div>
                <!-- <div class="section1__changeProfile_block">
                    <a href="" class="section1__changeProfile">Редагувати профіль</a>
                </div> -->
            </section>
            <section class="main__section2">
                <div class="section1__changeProfile_block">
                    <a href="{{ route('profile.edit') }}" class="section1__changeProfile">Редагувати профіль</a>
                </div>
                <div  class="section1__changeProfile_block" style="margin-left: 10px;" >
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                            style="color: white; text-decoration: none;"  class="section1__changeProfile">
                            {{ __('Вийти') }}
                        </a>
                    </form>
                </div>
            </section>

        </main>
        <footer id="footer" class="footer">
            <div>
                <img class="header__logo " src="/storage/media/logo-title.png"/>
                <div class="footer_wrapper">
                    <?php echo $footer->text?>
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

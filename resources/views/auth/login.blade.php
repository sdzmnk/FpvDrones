<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/SingIn.css">
    <title>Вхід</title>
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
                        <a class="burger__profile" href="/html/MyProfile.html">
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
                    <li class="header__li"><a class="last_a" ><img src="/storage/media/user accountGREEN.png" alt=""></a></li>
                </ol>
            </nav>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__wrapper">
                    <div class="section1__title"><h1>Вхід</h1></div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <div class="section1__input_text"><input placeholder="Електронна адреса"  id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" ></div>
                                @if ($errors->has('email'))
                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                    @foreach ($errors->get('email') as $error)
                                        <li style="color: #dc2626; font-size: 0.875rem; margin-bottom: 0.25rem;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <!-- Password -->
                        <div>

                            <div class="section1__input_pass"><input placeholder="Пароль" id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" ></div>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>


                        <div class="section1__container">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Забули пароль</a>
                            @endif

                            <img src="/storage/media/стрілка чорна.png" alt="">
                        </div>
                        <div class="section1__enter">
                            <button type="submit">Увійти</button>
                        </div>
                        <div class="section1__nav">
                            <p class="section1__nav_tex1">Не маєте аккаунт?</p>
                            <a href="{{ route('register') }}" class="">Зареєструватись</a>
                        </div>

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




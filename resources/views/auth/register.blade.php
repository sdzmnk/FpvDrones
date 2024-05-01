{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/Registry.css">
    <title>Реєстрація</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <!-- Header and navigation menu -->
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
                        <a class="burger__profile" href="/html/MyProfile.html">
                            <img src="/img/userAccountBgGreen.png"alt="">
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

                <h1 class="header__liFirst">DragonLab<br>DRONES</h1>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{ route('main') }}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{ route('main') }}#footer" class="">Контакти</a></li>
                    <li class="header__li"><img src="/img/userAccountBgGreen.png" alt=""></li>
                </ol>
            </nav>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__wrapper">
                    <div class="section1__title"><h1>Реєстрація</h1></div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <div class="section1__input_text">
                                <input placeholder="Прізвище та ім'я" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                            @if ($errors->has('name'))
                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                    @foreach ($errors->get('name') as $error)
                                        <li style="color: #dc2626; font-size: 0.875rem; margin-bottom: 0.25rem;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <!-- Email Address -->
                        <div>
                            <div class="section1__input_text">
                                <input placeholder="Електронна адреса" id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                            </div>
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
                            <div class="section1__input_pass">
                                <input placeholder="Пароль" id="password" type="password" name="password" required autocomplete="new-password">
                            </div>
                            @if ($errors->has('password'))
                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                    @foreach ($errors->get('password') as $error)
                                        <li style="color: #dc2626; font-size: 0.875rem; margin-bottom: 0.25rem;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <div class="section1__input_pass">
                                <input type="password" placeholder="Підтвердити пароль" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <ul style="list-style-type: none; margin: 0; padding: 0;">
                                    @foreach ($errors->get('password_confirmation') as $error)
                                        <li style="color: #dc2626; font-size: 0.875rem; margin-bottom: 0.25rem;">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>


                        <!-- Register Button -->
                        <div class="section1__enter">
                            <button type="submit">Зареєструватись</button>
                        </div>

                        <!-- Link to Sign In page -->
                        <div class="section1__nav">
                            <p class="section1__nav_tex1">Маєте аккаунт?</p>
                            <a href="{{ route('login') }}" class="">Увійти</a>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer id="footer" class="footer">
            <!-- Footer -->
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="/css/Registry.css">
    <title>Registry</title>
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
                        <img class="header__logo " src="/img/logo-title_Green.png"/>
                        <a class="burger__profile" href="/html/MyProfile.html">
                            <img src="/img/userAccountBgGreen.png"alt="">
                        </a>
                    </div>
                    <div class="burger__block2">
                        <ol class='header__ol1'>
                            <li class="header__li1"><a href="/html/Main.html" class="">Головна</a></li>
                            <li class="header__li1"><a href="/html/Main.html#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="/html/Main.html#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="/html/Main.html#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="/html/Main.html#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <img class="header__logo header__logo_off" src="/img/logo-title_Green.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="/html/Main.html" class="">Головна</a></li>
                    <li class="header__li"><a href="/html/Main.html#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="/html/Main.html#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="/html/Main.html#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="/html/Main.html#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="#footer" class="">Контакти</a></li>
                    <li class="header__li"><a class="last_a" href="/html/MyProfile.html"><img src="/img/user accountGREEN.png" alt=""></a></li>
                </ol>
            </nav>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__wrapper">
                    <div class="section1__title"><h1>Реєстрація</h1></div>
                    <div class="section1__input_text"><input type="text" placeholder="Прізвище та ім'я" name="" id=""></div>
                    <div class="section1__input_text"><input type="email" placeholder="Електронна адреса" name="" id=""></div>
                    <div class="section1__input_pass"><input type="password" placeholder="Пароль" name="" id=""></div>
                    <div class="section1__container">
                        <a>Забули пароль</a>
                        <img src="/img/стрілка чорна.png" alt="">
                    </div>
                    <div class="section1__enter"><a href="/">Зареєструватись</a></div>
                    <div class="section1__nav">
                        <p class="section1__nav_tex1">Маєте аккаунт?</p>
                        <a href="/html/SingIn.html" class="">Увійти</a>
                    </div>
                </div>
            </section>
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
                        <li><a href="/html/Main.html" class="">Головна</a></li>
                        <li><a href="/html/Main.html#aboutUs" class="">Про нас</a></li>
                        <li><a href="/html/Main.html#help" class="">Як допомогти</a></li>
                        <li><a href="/html/Main.html#needItem" class="">Необхідні комплектуючі</li>
                        <li><a href="/html/Main.html#photoReport" class="">Фотозвіт</a></li>
                        <li><a href="#footer" class="">Контакти</a></li>
                    </ol>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/Instuction.js"></script>
</body>
</html>


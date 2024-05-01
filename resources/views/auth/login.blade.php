{{--
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/SingIn.css">
    <title>SignIn</title>
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
                        <a class="burger__profile" href="/html/MyProfile.html">
                            <img src="/img/userAccountBgGreen.png"alt=""></a>
                    </div>
                    <div class="burger__block2">
                        <ol class='header__ol1'>
                            <li class="header__li1"><a href="{{ route('main') }}" class="">Головна</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="{{ route('main') }}#needItem" class="">Необхідні комплектуючі
                            </li>
                            <li class="header__li1"><a href="{{ route('main') }}#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="#footer" class="">Контакти</a></li>
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
                    <li class="header__li"><a href="/html/MyProfile.html"><img src="/img/userAccountBgGreen.png" alt=""></a></li>
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

                            <img src="/img/стрілка чорна.png" alt="">
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







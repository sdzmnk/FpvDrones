{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/MyProfile.css">
    <title>MyProfile</title>
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
                    <li class="header__li"><a href="#footer" class="">Контакти</a></li>
                    <li class="header__li"><a  href="/html/MyProfile.html"><span>Максим</span> <img src="/img/user accountGREEN.png" alt=""></a></li>
                </ol>
            </nav>
            <div class="header__navigation">
                <a href="{{ route('main') }}">Головна /</a>
                <p href="/">Особистий кабінет</p>
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
                    </div>
                    <div class="section1__block2">
                        <div class="section1__historyOrder_block">
                            <p class="section1__historyOrder">Історія замовленнь</p>
                        </div>

                        <div class="section1__block2__container">
                            <div class="section1__block2_order">
                                <ol class="section1__ol_1">
                                    <li>09/02/2024</li>
                                    <li>Контролер</li>
                                    <li>Рама</li>
                                    <li>Мотори</li>
                                </ol>
                                <ol class="section1__ol_2">
                                    <li>.</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                </ol>
                            </div>
                            <div class="section1__block2_order">
                                <ol class="section1__ol_1">
                                    <li>09/02/2024</li>
                                    <li>Контролер</li>
                                    <li>Рама</li>
                                    <li>Мотори</li>
                                </ol>
                                <ol class="section1__ol_2">
                                    <li>.</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                </ol>
                            </div>
                            <div class="section1__block2_order">
                                <ol class="section1__ol_1">
                                    <li>09/02/2024</li>
                                    <li>Контролер</li>
                                    <li>Рама</li>
                                    <li>Мотори</li>
                                </ol>
                                <ol class="section1__ol_2">
                                    <li>.</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                </ol>
                            </div>
                            <div class="section1__block2_order">
                                <ol class="section1__ol_1">
                                    <li>09/02/2024</li>
                                    <li>Контролер</li>
                                    <li>Рама</li>
                                    <li>Мотори</li>
                                </ol>
                                <ol class="section1__ol_2">
                                    <li>.</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                </ol>
                            </div>
                            <div class="section1__block2_order">
                                <ol class="section1__ol_1">
                                    <li>09/02/2024</li>
                                    <li>Контролер</li>
                                    <li>Рама</li>
                                    <li>Мотори</li>
                                </ol>
                                <ol class="section1__ol_2">
                                    <li>.</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                    <li>1шт</li>
                                </ol>
                            </div>
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
                        <li><a href="#footer" class="">Контакти</a></li>
                    </ol>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/Instuction.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/css/reset.css">
     <link rel="stylesheet" href="/css/SettingProfile.css">
     <title>SettingProfile</title>
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
                         <a class="burger__profile" href="{{ route('dashboard') }}">
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
                     <li class="header__li"><a  href="{{ route('dashboard') }}"><span>{{ $user->name }}</span> <img src="/img/user accountGREEN.png" alt=""></a></li>
                 </ol>
             </nav>
             <div class="header__navigation">
                 <a href="{{ route('main') }}">Головна /</a>
                 <a href="{{ route('dashboard') }}">Особистий кабінет /</a>
                 <p>Редагувати профіль</p>
             </div>
         </header>
         <main class="main">
             <section class="main__section1">
                <div class="section1__wrapper">
                @include('profile.partials.update-profile-information-form')
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

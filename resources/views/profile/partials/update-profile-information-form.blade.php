{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}


        <div class="section1__block">
            <h1 class="section1__title">Мої дані</h1>
        </div>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>


        <div class="section1__block2">

            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')


                <div class="block2__wrapper1">
                    <div class="block2__name">
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name ?? '') }}" required autofocus autocomplete="name"></input>
                    </div>
                    <div class="block2__name">
                        <input  id="email" name="email" type="email" value="{{ old('email', $user->email ?? '') }}" required autocomplete="username" ></input>

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>


                {{-- <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form> --}}



            <div class="block2__wrapper2">
                <div class="block2__info_block">
                    <div class="block2__name">
                        <input  id="phone_number" name="phone_number" type="text" value="{{ old('phone_number', $user->phone_number ?? '') }}"  required autocomplete="phone_number" ></input>
                    </div>
                    <div class="block2__name">
                        <input  id="country" name="country" type="text" value="{{ old('country', $user->country ?? '') }}"  required autocomplete="country" ></input>
                    </div>
                </div>
                <div class="block2__changeInfo">
                    <button type="submit">Змінити</button>
                </div>
                {{-- @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400"
                        >{{ __('Saved.') }}</p>
                    @endif --}}
            </div>
        </div>


 {{-- <!DOCTYPE html>
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

                 <h1 class="header__liFirst">DragonLab<br>DRONES</h1>
                 <ol class='header__ol'>
                     <li class="header__li"><a href="/html/Main.html" class="">Головна</a></li>
                     <li class="header__li"><a href="/html/Main.html#aboutUs" class="">Про нас</a></li>
                     <li class="header__li"><a href="/html/Main.html#help" class="">Як допомогти</a></li>
                     <li class="header__li"><a href="/html/Main.html#needItem" class="">Необхідні комплектуючі</li>
                     <li class="header__li"><a href="/html/Main.html#photoReport" class="">Фотозвіт</a></li>
                     <li class="header__li"><a href="#footer" class="">Контакти</a></li>
                     <li class="header__li"><a  href="/html/MyProfile.html"><span>Максим</span> <img src="/img/user accountGREEN.png" alt=""></a></li>
                 </ol>
             </nav>
             <div class="header__navigation">
                 <a href="/html/Main.html">Головна /</a>
                 <a href="/html/MyProfile.html">Особистий кабінет /</a>
                 <p>Редагувати профіль</p>
             </div>
         </header>
         <main class="main">
             <section class="main__section1">
                 <div class="section1__wrapper">
                     <div class="section1__block">
                         <h1 class="section1__title">Мої дані</h1>
                     </div>

                     <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                         @csrf
                     </form>


                     <div class="section1__block2">

                         <form method="post" action="{{ route('profile.update') }}">
                             @csrf
                             @method('patch')


                             <div class="block2__wrapper1">
                                 <div class="block2__name">
                                     <input id="name" name="name" type="text"  :value="old('name', $user->name)" required autofocus autocomplete="name"></input>
                                 </div>
                                 <div class="block2__name">
                                     <input  id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" ></input>

                                     @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                         <div>
                                             <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                 {{ __('Your email address is unverified.') }}

                                                 <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                     {{ __('Click here to re-send the verification email.') }}
                                                 </button>
                                             </p>

                                             @if (session('status') === 'verification-link-sent')
                                                 <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                     {{ __('A new verification link has been sent to your email address.') }}
                                                 </p>
                                             @endif
                                         </div>
                                     @endif
                                 </div>
                             </div>


                             <div class="flex items-center gap-4">
                                 <x-primary-button>{{ __('Save') }}</x-primary-button>

                                 @if (session('status') === 'profile-updated')
                                     <p
                                         x-data="{ show: true }"
                                         x-show="show"
                                         x-transition
                                         x-init="setTimeout(() => show = false, 2000)"
                                         class="text-sm text-gray-600 dark:text-gray-400"
                                     >{{ __('Saved.') }}</p>
                                 @endif
                             </div>
                         </form>



                         <div class="block2__wrapper2">
                             <div class="block2__info_block">
                                 <div class="block2__name">
                                     <input type="text" value="+380667466578"></input>
                                 </div>
                                 <div class="block2__name">
                                     <input type="text" value="Україна"></input>
                                 </div>
                             </div>
                             <div class="block2__changeInfo">
                                 <a href="">Змінити</a>
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
 </html> --}}







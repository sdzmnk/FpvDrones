{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/Instruction.css">
    <title>Інструкція</title>
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
                            <li class="header__li1"><a href="{{route('main')}}" class="">Головна</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <img class="header__logo header__logo_off" src="/storage/media/logo-title_Green.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{route('main')}}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                    <li class="header__li">
                    @auth
                        <a class="last_a" href="{{ route('dashboard') }}"><span>{{ auth()->user()->name }}</span><img src="/img/user accountGREEN.png" alt=""></a>
                    @else
                        <a href="{{ route('register') }}"><img src="/img/user accountGREEN.png" alt=""></a>
                    @endauth
                    </li>


                </ol>
            </nav>
            <div class="header__navigation">
                <a href="{{route('main')}}">Головна /</a>
                <p>Інструкція </p>
            </div>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__container">
                    <div class="section1__wrapper">
                        <?php
                            echo $instruction->description;
                        ?>
                        <div class="section1__button">
                            <button type="text">Підтвердити замовлення</button>
                        </div>
                        <div class="section1__nextButton">
                            <button class="buttonStep">Крок <span id="stepCounter">2</span><img src="/storage/media/стрілка чорна.png" alt=""></button>
                        </div>
                    </div>

                    <div class="section1__wrapper2">
                        <div class="wrapper2__block_photo">
                            <img id="wrapper2__change_photo" src="{{ $instruction->steps->first()->img }}" alt="">
                        </div>
                        <div class="section1__swipee_block">
                            <div class="wrapper2__counter_block">
                                <div class="wrapper2__counter_text">
                                    <p>Крок </p>
                                    <p class="wrapper2__counter1">1</p>
                                    <p>/</p>
                                    <p class="wrapper2__maxSlides">{{ $instruction->steps->count() }}</p>
                                </div>
                                <div class="custom-button">
                                    <img class="custom-prev" src="/storage/media/трілка сіра.png" alt="">
                                    <img class="custom-next" src="/storage/media/стрілка чорна.png" alt="">
                                </div>
                            </div>


                    <div class="swiper__container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($instruction->steps as $index => $step)
                                    <div class="swiper-slide">
                                        @if ($index == 0)
                                            <div class="swiper-slide1_block-text">
                                                <p class="swiper-slide1_text1"><?php  echo $step->description; ?></p>
                                                <div class="swiper-slide1_block">
                                                    <form action="{{ route('instruction.store') }}" method="POST">
                                                        @csrf
                                                        <div class="selected-details">
                                                    @foreach ($selectedDetails as $detail)
                                                        <div class="test">
                                                            <div class="slide1__block_scroll">
                                                                <p>{{ $detail->name }}</p>
                                                                <select  name="detail_{{ $detail->id }}">
                                                                    @for ($i = 1; $i <= $detail->need; $i++)
                                                                        <option value="{{ $i }} шт">{{ $i }} шт</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="slide1__block_scroll2">
                                                                @if ($detail->links)
                                                                    @foreach ($detail->links as $detailLink)
                                                                        <a href="{{ $detailLink->link }}">{{ $loop->iteration }}</a><br>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                        <div class=" swiper-slide" ><?php echo $step->description ?> </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="section1__button">
                        <button type="submit">Підтвердити замовлення</button>
                    </div>
                </form>
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
                        <li><a href="{{route('main')}}" class="">Головна</a></li>
                        <li><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                        <li><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                        <li><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                        <li><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                        <li><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                    </ol>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            freeMode: true,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: ".pagination",
                clickable: true,
            },
            breakpoints: {
                0:{
                    navigation: {
                        nextEl: ".buttonStep",
                    }
                },
                768:{
                    navigation: {
                        nextEl: ".custom-next",
                        prevEl: ".custom-prev",
                    }
                },
                1200:{
                    navigation: {
                        nextEl: ".custom-next",
                        prevEl: ".custom-prev",
                        loop: true,
                    }
                }
            },
            navigation: {
                nextEl: ".custom-next",
                prevEl: ".custom-prev",
            },
        });
    </script>
    <script src="/js/Instruction.js">
        var swiperContainer = document.querySelector('.swiper');


var firstSlide = swiperContainer.querySelector('.swiper-slide');


swiperContainer.style.height = firstSlide.offsetHeight + 'px';



    </script>

</body>

</html>
 --}}

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/Instruction.css">
    <title>Інструкція</title>
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
                            <li class="header__li1"><a href="{{route('main')}}" class="">Головна</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                            <li class="header__li1"><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                            <li class="header__li1"><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                        </ol>
                    </div>
                </div>

                <img class="header__logo header__logo_off" src="/storage/media/logo-title_Green.png"/>
                <ol class='header__ol'>
                    <li class="header__li"><a href="{{route('main')}}" class="">Головна</a></li>
                    <li class="header__li"><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                    <li class="header__li"><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                    <li class="header__li"><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                    <li class="header__li"><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                    <li class="header__li"><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                    <li class="header__li">
                    @auth
                        <a class="last_a" href="{{ route('dashboard') }}"><span>{{ auth()->user()->name }}</span><img src="/img/user accountGREEN.png" alt=""></a>
                    @else
                        <a href="{{ route('register') }}"><img src="/img/user accountGREEN.png" alt=""></a>
                    @endauth
                    </li>
                </ol>
            </nav>
            <div class="header__navigation">
                <a href="{{route('main')}}">Головна /</a>
                <p>Інструкція </p>
            </div>
        </header>
        <main class="main">
            <section class="main__section1">
                <div class="section1__container">
                    <div class="section1__wrapper">
                        <?php
                            echo $instruction->description;
                        ?>
                        <div class="section1__button">
                            <button type="text" form="myForm">Підтвердити замовлення</button>
                        </div>
                        <div class="section1__nextButton">
                            <button class="buttonStep">Крок <span id="stepCounter">2</span><img src="/storage/media/стрілка чорна.png" alt=""></button>
                        </div>
                    </div>

                    <div class="section1__wrapper2">
                        <div class="wrapper2__block_photo">
                            <img id="wrapper2__change_photo" src="{{ $instruction->steps->first()->img }}" alt="">
                        </div>
                        <div class="section1__swipee_block">
                            <div class="wrapper2__counter_block">
                                <div class="wrapper2__counter_text">
                                    <p>Крок </p>
                                    <p class="wrapper2__counter1">1</p>
                                    <p>/</p>
                                    <p class="wrapper2__maxSlides">{{ $instruction->steps->count() }}</p>
                                </div>
                                <div class="custom-button">
                                    <img class="custom-prev" src="/storage/media/трілка сіра.png" alt="">
                                    <img class="custom-next" src="/storage/media/стрілка чорна.png" alt="">
                                </div>
                            </div>
                            <div class="swiper__container">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($instruction->steps as $index => $step)
                                            <div class="swiper-slide">
                                                @if ($index == 0)
                                                    <div class="swiper-slide1_block-text">
                                                        <p class="swiper-slide1_text1"><?php  echo $step->description; ?></p>
                                                        <div class="swiper-slide1_block">
                                                            <form id="myForm" action="{{ route('instruction.store') }}" method="POST">
                                                                @csrf
                                                                <div class="selected-details">
                                                                    @foreach ($selectedDetails as $detail)
                                                                        <div class="test">
                                                                            <div class="slide1__block_scroll">
                                                                                <p>{{ $detail->name }}</p>
                                                                                <select  name="detail_{{ $detail->id }}">
                                                                                    @for ($i = 1; $i <= $detail->need; $i++)
                                                                                        <option value="{{ $i }} шт">{{ $i }} шт</option>
                                                                                    @endfor
                                                                                </select>
                                                                            </div>
                                                                            <div class="slide1__block_scroll2">
                                                                                @if ($detail->links)
                                                                                    @foreach ($detail->links as $detailLink)
                                                                                        <a href="{{ $detailLink->link }}">{{ $loop->iteration }}</a><br>
                                                                                        @endforeach
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="swiper-slide" ><?php echo $step->description ?> </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section1__button">
                                <button form="myForm" type="submit">Підтвердити замовлення</button>
                            </div>
                        </div>
                    </section>
                </main>
                <footer id="footer" class="footer">
                    <div>
                        <img class="header__logo " src="/storage/media/logo-title.png"/>
                        <div class="footer_wrapper">
                            <?php echo $footer->text?>
                            <ol class="footer__list2">
                                <li><a href="{{route('main')}}" class="">Головна</a></li>
                                <li><a href="{{route('main')}}#aboutUs" class="">Про нас</a></li>
                                <li><a href="{{route('main')}}#help" class="">Як допомогти</a></li>
                                <li><a href="{{route('main')}}#needItem" class="">Необхідні комплектуючі</li>
                                <li><a href="{{route('main')}}#photoReport" class="">Фотозвіт</a></li>
                                <li><a href="{{route('main')}}#footer" class="">Контакти</a></li>
                            </ol>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    freeMode: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: true,
                    pagination: {
                        el: ".pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        0:{
                            navigation: {
                                nextEl: ".buttonStep",
                            }
                        },
                        768:{
                            navigation: {
                                nextEl: ".custom-next",
                                prevEl: ".custom-prev",
                            }
                        },
                        1200:{
                            navigation: {
                                nextEl: ".custom-next",
                                prevEl: ".custom-prev",
                                loop: true,
                            }
                        }
                    },
                    navigation: {
                        nextEl: ".custom-next",
                        prevEl: ".custom-prev",
                    },
                });
            </script>

            <script>
                const instructionCounter = document.querySelector(".wrapper2__counter1");
                const stepCounter = document.getElementById('stepCounter');
                const instructionCustomPrev = document.querySelector(".custom-prev");
                const instructionCustomNext = document.querySelector(".custom-next");
                const photoInstruction = document.getElementById('wrapper2__change_photo');

                let counterValue = 1;
                let stepCounterValue = 1;
                const totalSteps = {{ $instruction->steps->count() }};
                const steps = @json($instruction->steps);

                instructionCustomPrev.addEventListener('click', () => changeStep(-1));
                instructionCustomNext.addEventListener('click', () => changeStep(1));

                function changeStep(direction) {
                    counterValue += direction;
                    if (counterValue < 1) {
                        counterValue = totalSteps;
                    } else if (counterValue > totalSteps) {
                        counterValue = 1;
                    }
                    stepCounterValue = counterValue;

                    instructionCounter.textContent = counterValue;
                    stepCounter.textContent = stepCounterValue;
                    photoInstruction.src = steps[counterValue - 1].img;
                }
            </script>
            <script src="/js/Instruction.js">
                const instructionSteps = @json($instruction->steps);
                var swiperContainer = document.querySelector('.swiper');

                var firstSlide = swiperContainer.querySelector('.swiper-slide');

                swiperContainer.style.height = firstSlide.offsetHeight + 'px';
            </script>
        </body>

        </html>

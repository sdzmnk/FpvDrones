const click = document.querySelector('.burder__logo_block');
const ol = document.querySelector('.burger__block2');
const burger = document.querySelector('.burger__container');
const li1 = document.querySelectorAll('.header__li1');
click.addEventListener('click',()=>{
    if(ol.style.display == "flex"){
        ol.style.display = "none"
        document.querySelector('.container').style.height = "auto"
        document.querySelector('.header__section').style.display = 'block'
        document.querySelector('.nav').style.background = "none"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1

    }else{
        ol.style.display = 'flex'
        document.querySelector('.container').style.height = 100 +'vh'
        document.querySelector('.header__section').style.display = 'none'
        document.querySelector('.nav').style.background = "rgb(0,0,0,0.5)"
        document.querySelector('.burger__1').style.opacity = 0
        document.querySelector('.burger__2').style.opacity = 0
        li1.forEach((item)=>{
            item.addEventListener('click' , () => {
                ol.style.display = "none"
                document.querySelector('.container').style.height = "auto"
                document.querySelector('.header__section').style.display = 'block'
                document.querySelector('.nav').style.background = "none"
                document.querySelector('.burger__1').style.opacity = 1
                document.querySelector('.burger__2').style.opacity = 1
            })
        })


    }
})


// const clickCircle = document.querySelectorAll('.clickCircle');

// clickCircle.forEach((item) => {
//     item.addEventListener('click', () => {
//         const currentStatus = item.getAttribute('data-status');
//         if (currentStatus === "empty") {
//             item.src = '/img/sircleXl.png';
//             item.setAttribute('data-status', 'filled');
//         } else {
//             item.src = "/img/sircleEmptyXl.png";
//             item.setAttribute('data-status', 'empty');
//         }
//     });
// });


//
window.addEventListener('beforeunload', () => {
    sessionStorage.clear();
});

const clickCircle = document.querySelectorAll('.clickCircle');

clickCircle.forEach((item) => {
    item.addEventListener('click', () => {
        const currentStatus = item.getAttribute('data-status');
        const detailId = item.closest('.swiper-slide').getAttribute('data-detail-id'); // Получаем ID детали
        if (currentStatus === "empty") {
            item.src = '/img/sircleXl.png';
            item.setAttribute('data-status', 'filled');
            sessionStorage.setItem(detailId, 'selected');
        } else {
            item.src = "/img/sircleEmptyXl.png";
            item.setAttribute('data-status', 'empty');
            sessionStorage.removeItem(detailId);
        }

        const selectedDetails = Object.keys(sessionStorage).filter(key => sessionStorage.getItem(key) === 'selected');
        fetch('/save-selected-details', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ selectedDetails: selectedDetails })
        });
    });
});


const droneButtons = document.querySelectorAll('.section4__block2 .drone__button');
const droneSwipers = document.querySelectorAll('.section4__block3 .swiper');

// Обработка клика на кнопки дронов
droneButtons.forEach(button => {
    button.addEventListener('click', () => {
        const droneId = button.getAttribute('data-drone-id');

        // Переключение видимости слайдеров
        droneSwipers.forEach(swiper => {
            if (swiper.classList.contains(`swiper__active-${droneId}`)) {
                swiper.style.display = 'block';
            } else {
                swiper.style.display = 'none';
            }
        });

        // Обновление стилей кнопок
        droneButtons.forEach(btn => {
            if (btn === button) {
                btn.style.background = 'black';
                btn.style.color = 'white';
            } else {
                btn.style.background = 'none';
                btn.style.color = 'black';
            }
        });
    });
});

// Установка начального активного дрона
if (droneButtons.length > 0) {
    droneButtons[0].click();
}

////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////


var textToCopy_1 = document.getElementById('textToCopy_1').innerText;
var textToCopy_2 = document.getElementById('textToCopy_2').innerText;
var copyButton_1 = document.getElementById('buttonCopy_1');
var copyButton_2 = document.getElementById('buttonCopy_2');

function CopyText(text, button){
     var textarea = document.createElement('textarea');
     textarea.value = text;
     document.body.appendChild(textarea);
     textarea.select();
     document.execCommand('copy');
     document.body.removeChild(textarea);
     button.innerText = 'Скопійовано!';
}
copyButton_1.addEventListener('click', () =>{
    CopyText(textToCopy_1,copyButton_1)
})
copyButton_2.addEventListener('click', () =>{
    CopyText(textToCopy_2,copyButton_2)
})

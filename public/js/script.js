const click = document.querySelector('.burder__logo_block');
const ol = document.querySelector('.burger__block2');
const burger = document.querySelector('.burger__container');
const li1 = document.querySelectorAll('.header__li1');
click.addEventListener('click',()=>{
    if(ol.style.display == "flex"){
        ol.style.display = "none"
        document.querySelector('.container').style.height = "auto"
        // document.querySelector('.header').style.height = 70+'vh'
        document.querySelector('.header__section').style.display = 'block'
        document.querySelector('.nav').style.background = "none"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1
    }else{
        ol.style.display = 'flex'
        document.querySelector('.container').style.height = 100 +'vh'
        // document.querySelector('.header').style.height = 100 +'vh'
        document.querySelector('.header__section').style.display = 'none'
        document.querySelector('.nav').style.background = "rgb(0,0,0,0.5)"
        document.querySelector('.burger__1').style.opacity = 0
        document.querySelector('.burger__2').style.opacity = 0
    }
})


const clickCircle = document.querySelectorAll('.clickCircle');

clickCircle.forEach((item) => {
    item.addEventListener('click', () => {
        const currentStatus = item.getAttribute('data-status');
        if (currentStatus === "empty") {
            item.src = '/img/sircleXl.png';
            item.setAttribute('data-status', 'filled');
        } else {
            item.src = "/img/sircleEmptyXl.png";
            item.setAttribute('data-status', 'empty');
        }
    });
});




const buttonBaby = document.querySelector('.baby__button');
const buttonTeen = document.querySelector('.tenn__button');
const swiper__active1 = document.querySelector('.swiper__active-1')
const swiper__active2 = document.querySelector('.swiper__active-2')
function toggleButton(activeButton, inactiveButton) {
    activeButton.style.background = 'black';
    activeButton.style.color = 'white';
    inactiveButton.style.background = 'none';
    inactiveButton.style.color = 'black';


}

buttonBaby.addEventListener('click', () => {
    toggleButton(buttonBaby, buttonTeen);
    if(swiper__active1.style.display == 'block'){
        swiper__active1.style.display = 'none';
        swiper__active2.style.display = 'block';
    }

});

buttonTeen.addEventListener('click', () => {
    toggleButton(buttonTeen, buttonBaby);
    if(swiper__active1.style.display == 'none'){
        swiper__active1.style.display = 'block';
        swiper__active2.style.display = 'none';
    }
});

// Встановлення початкових стилів
toggleButton(buttonTeen, buttonBaby);

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

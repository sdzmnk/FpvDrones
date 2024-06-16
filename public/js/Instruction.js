const click = document.querySelector('.burder__logo_block');
const ol = document.querySelector('.burger__block2');
const burger = document.querySelector('.burger__container');
const li1 = document.querySelectorAll('.header__li1');
click.addEventListener('click',()=>{
    if(ol.style.display == "flex"){
        ol.style.display = "none"
        document.querySelector('.container').style.height = "auto"
        document.querySelector('.header').style.height = "auto"
        document.querySelector('.burger__container').style.height = 'auto'
        document.querySelector('.header').style.background = "rgb(0,0,0,0.0001)"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1
    }else{
        ol.style.display = 'flex'
        document.querySelector('.container').style.height = 100 +'vh'
        document.querySelector('.burger__container').style.height = 100 +'vh'
        document.querySelector('.header').style.height = 100 +'vh'
        document.querySelector('.header').style.background = "rgb(0,0,0,0.5)"
        document.querySelector('.burger__1').style.opacity = 0
        document.querySelector('.burger__2').style.opacity = 0
    }
})
li1.forEach((item) => {
    item.addEventListener('click', () => {
        document.querySelector('.header').style.height = 'auto';
        document.querySelector('.container').style.height = 'auto';
        console.log("hello");
        ol.style.display = "none"
        document.querySelector('.container').style.background = "rgb(0,0,0,0.0001)"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1
    });
});


// instructionCustomPrev.addEventListener('click', () => handleButton(instructionCustomPrev));
// instructionCustomNext.addEventListener('click', () => handleButton(instructionCustomNext));


// instructionCustomPrev.addEventListener('click' , ()=> {
//     Value(instructionCustomPrev)
// })
// instructionCustomNext.addEventListener('click' , ()=> {
//     Value(instructionCustomNext)
// })
// buttonStep.addEventListener('click' , ()=> {
//     Value(instructionCustomNext)
// })


// let section1__button = document.querySelectorAll('.button')
// let PopUp = document.querySelector('.PopUp__container')
// let PopUpCross = document.querySelector('.PopUp__cross')
// let container = document.querySelector('.container')

// section1__button.forEach((btn) => {
//     btn.addEventListener('click' , () => {
//         PopUp.style.display = "block"
//         container.style.height = "100vh"
//     })
// })

// PopUpCross.addEventListener('click' , () => {
//     PopUp.style.display = "none"
//     container.style.height = "auto"
// })

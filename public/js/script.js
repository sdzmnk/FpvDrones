const click = document.querySelector('.burder__logo_block');
const ol = document.querySelector('.burger__block2');
const burger = document.querySelector('.burger__container');
const li1 = document.querySelectorAll('.header__li1');
click.addEventListener('click',()=>{
    if(ol.style.display == "flex"){
        ol.style.display = "none"
        document.querySelector('.container').style.height = "auto"
        document.querySelector('.header').style.height = 'auto'
        burger.style.background = "rgb(0,0,0,0.0001)"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1
    }else{
        ol.style.display = 'flex'
        document.querySelector('.container').style.height = 100 +'vh'
        document.querySelector('.header').style.height = 100 +'vh'
        burger.style.background = "rgb(0,0,0,0.5)"
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
        burger.style.background = "rgb(0,0,0,0.0001)"
        document.querySelector('.burger__1').style.opacity = 1
        document.querySelector('.burger__2').style.opacity = 1
    });
});







const instructionCounter = document.querySelector(".wrapper2__counter1")
const instructionCustomPrev = document.querySelector(".custom-prev")
const instructionCustomNext = document.querySelector(".custom-next")
let counterValue = parseInt(instructionCounter.textContent)

instructionCustomPrev.addEventListener('click' , ()=> {
    if (instructionCounter.textContent == 1 ){
    }else{
        counterValue -=1
        instructionCounter.textContent = counterValue

    }
})
instructionCustomNext.addEventListener('click' , ()=> {
    if (instructionCounter.textContent == 6 ){
    }else{
        counterValue +=1
        instructionCounter.textContent = counterValue

    }

})
console.log(counterValue + 1)

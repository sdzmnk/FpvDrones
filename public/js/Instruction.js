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



// const instructionCounter = document.querySelector(".wrapper2__counter1")
// let counterValue = parseInt(instructionCounter.textContent)
// const stepCounter = document.getElementById('stepCounter')
// let stepCounterValue = parseInt(stepCounter.textContent)
// const instructionCustomPrev = document.querySelector(".custom-prev")
// const instructionCustomNext = document.querySelector(".custom-next")
// const buttonStep = document.querySelector(".buttonStep")
// let photoInstruction1 = document.getElementById('wrapper2__change_photo')
// let photoInstruction2 = document.getElementById('changePhoto')

// function Value(button){
//     if(button == instructionCustomPrev){
//         counterValue -= 1
//         if(counterValue == 0){
//             counterValue = 6
//             instructionCounter.textContent = counterValue

//         }else{
//             instructionCounter.textContent = counterValue
//         }
//         return switchMain(counterValue)
//     }if (button == instructionCustomNext || button == instructionCustomNext_2 ){
//         counterValue += 1
//         if(stepCounterValue < 7){
//             stepCounterValue += 1
//             stepCounter.textContent = stepCounterValue
//             if(counterValue == 6){
//                 stepCounterValue = 1
//                 stepCounter.textContent = stepCounterValue
//             }

//         }if(counterValue == 7){
//             counterValue = 1
//             instructionCounter.textContent = counterValue
//         }
//         else{
//             instructionCounter.textContent = counterValue

//         }
//         return switchMain(counterValue)
//     }
// }

// function switchMain(value){
//     switch(value){
//         case (1):{
//             photoInstruction1.src = "/storage/media/fotoinstruction1.png"
//             break;
//         }
//         case (2):{
//             photoInstruction1.src = "/storage/media/fotoinstruction2.png"
//             break;
//         }
//         case (3):{
//             photoInstruction1.src = "/storage/media/fotoinstruction3.png"
//             break;
//         }
//         case (4):{
//             photoInstruction1.src = "/storage/media/fotoinstruction4.png"
//             break;
//         }
//         case (5):{
//             photoInstruction1.src = "/storage/media/fotoinstruction5.png"
//             break;
//         }
//         case (6):{
//             photoInstruction1.src = "/storage/media/fotoinstruction6.png"
//             break;
//         }
//     }
// }


instructionCustomPrev.addEventListener('click', () => handleButton(instructionCustomPrev));
instructionCustomNext.addEventListener('click', () => handleButton(instructionCustomNext));


instructionCustomPrev.addEventListener('click' , ()=> {
    Value(instructionCustomPrev)
})
instructionCustomNext.addEventListener('click' , ()=> {
    Value(instructionCustomNext)
})
buttonStep.addEventListener('click' , ()=> {
    Value(instructionCustomNext)
})

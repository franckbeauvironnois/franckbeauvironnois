const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;

function slideSuivante(){
    items[count].classList.remove('active');

if(count < nbSlide -16 ){
count++;
} else {
    count = 0;
}


 items[count].classList.add('active')

}

suivant.addEventListener('click',slideSuivante)

function slidePredecente(){
items[count].classList.remove('active');

if(count > 0){
    count--;
} else {
    count = nbSlide -16 ;
}


items[count].classList.add('active')

}
precedent.addEventListener('click',slidePredecente)

function keyPress(e){
   if(e.keyCode === 37) {
       slidePredecente();
   } else if(e.keyCode === 39)
   slideSuivante();

}

document.addEventListener('keydown',keyPress)

const burger = document.querySelector('.burger');
const panier = document.querySelector('.panier1');
let check = document.querySelector('#check');
const log = document.querySelector('.logout');

/* --------------- panier */

burger.addEventListener('click',

    function affichpanier() {
        if (check.checked) {
            panier.style.display = "flex";
        } else {
            panier.style.display = "none";
        }
    }

);

/* ------------------------- scroll */

let scrollpos = 0;

window.addEventListener('scroll', function(){

    if ((document.body.getBoundingClientRect()).top > scrollpos){
        log.style.transition = "1s ease-out";
        log.style.position = "fixed";
        log.style.left = "5vh";
        log.style.top = "5vh";
    }else {
        log.style.transition = "1s ease-out";
        log.style.position = "";
        log.style.margin = "";
        log.style.left = "";
        log.style.top = "";
        burger.style.transition = "1s ease-out";
        burger.style.top = "5vh";
    }

    scrollpos = (document.body.getBoundingClientRect()).top;

    if ((scrollpos = (document.body.getBoundingClientRect()).top) == false) {
        burger.style.top = "20vh";
        log.style.transition = "1s ease-out";
        log.style.position = "";
        log.style.left = "";
    }
    if (log.style.position == "fixed") {
        burger.style.transition = "1s ease-out";
        burger.style.top = "5vh";
    }

});

/* ------------- carousel */

let slideIndex = [1,1];
viewSlides(1);
function changeSlide(n) {
    viewSlides(slideIndex[0] += n);
}
function viewSlides(n) {
    let ele = document.getElementsByClassName("slide");
    if (n > ele.length) {
    slideIndex[0] = 1
    }
    if (n < 1) {
    slideIndex[0] = ele.length
    }
    for (i = 0; i < ele.length; i++) {
    ele[i].style.display = "none";
    }
    ele[slideIndex[0]-1].style.display = "flex";
}
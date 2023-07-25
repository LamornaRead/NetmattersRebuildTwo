//hamburger vars

const hamburger = document.querySelector('.hamburger');
const hamburgerTwo = document.querySelector('.hamburger-two');
const navSmall = document.querySelector('.side-nav');
const navLink = document.querySelectorAll('.nav-li');
const body = document.querySelector('.body');
const overlay = document.querySelector('.overlay');



//hamburger event and function

hamburger.addEventListener("click", mobileMenu);
hamburgerTwo.addEventListener("click", mobileMenu);
overlay.addEventListener("click", closeMenuTwo);

function mobileMenu() {
    this.classList.toggle('active');
    navSmall.classList.toggle('active');
    body.classList.toggle('active');
    overlay.classList.toggle('active');
};

navLink.forEach(n => n.addEventListener('click', closeMenu));

function closeMenu() {
    this.classList.remove('active');
    navSmall.classList.remove('active');
    body.classList.remove('active');
    overlay.classList.remove('active');
}

function closeMenuTwo() {
    hamburger.classList.remove('active');
    hamburgerTwo.classList.remove('active');
    navSmall.classList.remove('active');
    body.classList.remove('active');
    overlay.classList.remove('active');
}







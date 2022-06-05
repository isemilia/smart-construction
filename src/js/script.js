window.addEventListener('load', () => {
    new WOW().init();
});

let preloader;

window.addEventListener('DOMContentLoaded', () => {
    preloader = document.querySelector('#preloader');
});

window.addEventListener('load', () => {
    preloader.classList.add('hidden');
});
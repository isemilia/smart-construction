window.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('[data-popup]');
    const popupClose = document.querySelector('[data-popup-close]');
    const popupTriggers = Array.from(document.querySelectorAll('[data-popup-trigger]'));

    popupTriggers.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            popup.classList.add('popup_active');
        });
    });

    popupClose.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.remove('popup_active');
    });
});
window.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('[data-hamburger]');
    const menu = document.querySelector('[data-header-menu]');
    const menuItems = Array.from(document.querySelectorAll('[data-header-menu-item]'))

    hamburger.addEventListener('click', () => {
        menu.classList.add('header__mobile_active');
    });

    menu.addEventListener('click', (e) => {
        e.target.classList.remove('header__mobile_active');
    });

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menu.classList.remove('header__mobile_active');
        })
    })
});
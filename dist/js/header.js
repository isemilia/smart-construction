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

window.addEventListener('DOMContentLoaded', () => {
    const city = document.querySelector('[data-city]');
    const addressNur = document.querySelector('[data-address-nursultan]'),
    addressAlmaty = document.querySelector('[data-address-almaty]');
    const mapNur = document.querySelector('[data-map-nursultan]'),
    mapAlmaty = document.querySelector('[data-map-almaty]');

    city.addEventListener('click', (e) => {
        e.preventDefault();
        if(city.innerText == 'Нур-Султан') {
            city.innerText = 'Алматы';
            addressNur.style.display = 'none';
            addressAlmaty.style.display = 'block';
            //отобразить карту алматы
            mapNur.style.display = 'none';
            mapAlmaty.style.display = 'block';
        } else if (city.innerText == 'Алматы') {
            city.innerText = 'Нур-Султан';
            addressNur.style.display = 'block';
            addressAlmaty.style.display = 'none';
            //отобразить карту астаны
            mapNur.style.display = 'block';
            mapAlmaty.style.display = 'none';
        }
    });

});
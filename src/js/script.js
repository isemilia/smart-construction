window.addEventListener('DOMContentLoaded', () => {
    let slider = tns({
        container: '.promo__slider',
        items: 1,
        slideBy: 1,
        autoplay: true,
        controls: false,
        autoplayButtonOutput: false
    });

    let advSlider = tns({
        container: '.advantages__slider',
        items: 2.5,
        slideBy: 1,
        autoplay: false,
        controls: false,
        autoplayButtonOutput: false,
        fixedWidth: 570,
        loop: false,
        mouseDrag: true,
        gutter: 40,
        // center: true,
        nav: false,
        swipeAngle: false
    });
});
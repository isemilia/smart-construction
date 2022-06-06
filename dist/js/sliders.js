window.addEventListener('DOMContentLoaded', () => {
    let slider = tns({
        container: '.promo__slider',
        items: 1,
        slideBy: 1,
        autoplay: false,
        controls: false,
        autoplayButtonOutput: false,
        autoHeight: true
    });

    let advSlider = tns({
        container: '.advantages__slider',
        slideBy: 1,
        items: 2.5,
        autoplay: false,
        controls: false,
        autoplayButtonOutput: false,
        // fixedWidth: 570,
        loop: false,
        mouseDrag: true,
        gutter: 40,
        nav: false,
        swipeAngle: false,
        responsive: {
            1420: {
                fixedWidth: 570,
            },
            1200: {
                fixedWidth: 530,
            },
            1024: {
                fixedWidth: 480,
            },
            768: {
                fixedWidth: 440,
            },
            576: {
                fixedWidth: 420,
            },
            425: {
                fixedWidth: 380,
                gutter: 20
            },
            375: {
                fixedWidth: 335,
                gutter: 20
            },
            320: {
                fixedWidth: 310,
                gutter: 20,
                items: 1
            }
        }
    });

    // let arSlider = tns({
    //     container: '#arSlider',
    //     items: 1,
    //     slideBy: 1,
    //     autoplay: true,
    //     controls: false,
    //     autoplayButtonOutput: false
    // });
});
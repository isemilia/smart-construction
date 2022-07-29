window.addEventListener('DOMContentLoaded', () => {
    //singleStart

    const buildSwiperSlider = sliderElm => {
        const sliderIdentifier = sliderElm.dataset.id;
        return new Swiper(`#${sliderElm.id}`, {
            navigation: {
                nextEl: `#contentNext${sliderIdentifier}`,
                prevEl: `#contentPrev${sliderIdentifier}`
            },
            pagination: {
                el: `#contentPag${sliderIdentifier}`,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
            },
        });
    }
    
    // Get all of the swipers on the page
    const allSliders = document.querySelectorAll('.content-section-swiper');
    
    // Loop over all of the fetched sliders and apply Swiper on each one.
    allSliders.forEach(slider => buildSwiperSlider(slider));
    
    //singleEnd
});
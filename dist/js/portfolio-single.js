window.addEventListener('DOMContentLoaded', () => {
    //singleStart
    const swiper = new Swiper('#singleSlider', {
    
      // If we need pagination
      pagination: {
        el: '#singlePag',
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '#singleNext',
        prevEl: '#singlePrev',
      },
    });    
    //singleEnd
});
import '../../node_modules/swiper/swiper-bundle.js';
import '../../node_modules/glightbox/dist/js/glightbox.min.js';
import setImageObjectFit from './utilities/logicObjetcFit.js';

let swiper = new Swiper(".mySwiper", {
    lazy: true,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

swiper.on('lazyImageReady', (swiper, slideEl, imageEl) => {
    setImageObjectFit(imageEl)
})

let lightbox = GLightbox({
    selector: '.glightbox'
});
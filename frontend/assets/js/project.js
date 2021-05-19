import '../../node_modules/swiper/swiper-bundle.js';
import '../../node_modules/glightbox/dist/js/glightbox.min.js';

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

let lightbox = GLightbox({
    selector: '.glightbox'
});
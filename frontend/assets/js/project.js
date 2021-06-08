import '../../node_modules/swiper/swiper-bundle.js';
import '../../node_modules/glightbox/dist/js/glightbox.min.js';
import setImageObjectFit from './utilities/logicObjetcFit.js';

let swiper = new Swiper(".mySwiper", {
    lazy: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});

swiper.on('lazyImageReady', (swiper, slideEl, imageEl) => {
    setImageObjectFit(imageEl)
})

let lightbox = GLightbox({
    selector: '.glightbox',
    loop: true,
});

//Gallery
let lightbox2 = GLightbox({
    selector: '.glightbox2',
});

let galeria = document.getElementsByClassName('gallery-item');
for (let i = 0; i < galeria.length; i++) {
    const element = galeria[i];
    setImageObjectFit(element);
}
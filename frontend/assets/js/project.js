import '../../node_modules/swiper/swiper-bundle.js';
import '../../node_modules/glightbox/dist/js/glightbox.min.js';
import setImageObjectFit from './utilities/logicObjetcFit.js';


let thumbs = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    lazy: true,
});

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
    thumbs: {
        swiper: thumbs,
    },
});

swiper.on('lazyImageReady', (swiper, slideEl, imageEl) => {
    setImageObjectFit(imageEl)
})

let lightbox = GLightbox({
    selector: '.glightbox',
    loop: true,
});

let openGalleryButton = document.getElementById('open-gallery-button');
let gallery = document.getElementById('gallery');
let galleryStatus = false;

openGalleryButton.onclick = () => {
    if (galleryStatus == false) {
        gallery.classList.replace('gallery-close','gallery-open');
        galleryStatus = true;
    }else{
        gallery.classList.replace('gallery-open','gallery-close');
        galleryStatus = false;
    }
}
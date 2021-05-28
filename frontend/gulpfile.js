const gulp = require('gulp');
const { src, dest, parallel, series } = require('gulp');
const minifycss = require('gulp-minify-css');
//const imagemin = require('gulp-imagemin');

/*
    custom_code
*/
let exportCss = () => {
    console.log('Start minify css..');
    console.log('Sending custom css to production..');
    return src('./assets/css/*.css')
        .pipe(minifycss())
        .pipe(dest('../src/assets/css/'));
}
let exportJs = () => {
    console.log('Sending custom js to production..');
    return src('./assets/js/**/*.js')
        .pipe(dest('../src/assets/js/'));
}
let custom_code = series(exportCss, exportJs);

/*
    images_fonts
*/
let imageTask = () => {
    console.log('Sending images to production..');
    return src('./assets/img/**/*')
        //.pipe(imagemin())
        .pipe(dest('../src/assets/img/'));
}
let fontTask = () => {
    console.log('Sending fonts to production..');
    return src('./assets/css/fonts/*')
        .pipe(dest('../src/assets/css/fonts'));
}
let images_fonts = parallel(imageTask, fontTask)

/*
    node_modules
*/
let bootstrapcss = () => {
    console.log('Exporting bootstrap css...')
    return src('./node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(dest('../src/node_modules/bootstrap/dist/css/'));
}
let glightboxcss = () => {
    console.log('Exporting glightbox css..')
    return src('./node_modules/glightbox/dist/css/glightbox.min.css')
        .pipe(dest('../src/node_modules/glightbox/dist/css/'));
}
let swipercss = () => {
    console.log('Exporting swiper css..')
    return src('./node_modules/swiper/swiper-bundle.min.css')
        .pipe(dest('../src/node_modules/swiper/'));
}

let bootstrapjs = () => {
    console.log('Exporting bootstrap js...')
    return src('./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')
        .pipe(dest('../src/node_modules/bootstrap/dist/js/'));
}
let glightboxjs = () => {
    console.log('Exporting glightbox js..')
    return src('./node_modules/glightbox/dist/js/glightbox.min.js')
        .pipe(dest('../src/node_modules/glightbox/dist/js/'));
}
let swiperjs = () => {
    console.log('Exporting swiper js..')
    return src('./node_modules/swiper/swiper-bundle.min.js')
        .pipe(dest('../src/node_modules/swiper/'));
}
let node_modules = series(parallel(bootstrapcss, glightboxcss, swipercss), parallel(bootstrapjs, glightboxjs, swiperjs));

/*
    exports
*/
exports.exportModules = node_modules;
exports.exportCustoms = custom_code;
exports.all = series(node_modules, custom_code, images_fonts);
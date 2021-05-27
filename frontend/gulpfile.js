const { src, dest } = require('gulp');
const minifycss = require('gulp-minify-css');

exports.default = () => {
    console.log('Start minify css..');
    return src('./assets/css/*.css')
        .pipe(minifycss())
        .pipe(dest('./dist/css/'));
}
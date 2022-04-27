//===========================================================/
//Librerias
//===========================================================/
const { src, dest, parallel, watch } = require('gulp'); // Gulp
const sourcemaps = require('gulp-sourcemaps');
//***************************CSS******************************
const sass = require('gulp-sass')(require('sass')); //Compilador de SASS
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
//===========================================================/
//***************************img******************************
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
//===========================================================/
//***************************JS******************************
const terser = require('gulp-terser-js');
//===========================================================/

const srcFile = {
    scss: 'src/scss/**/*.scss',
    img: 'src/img/*',
    js: 'src/js/**/*.js'
}

const build = {
    css: 'public/build/css',
    img: 'public/build/img',
    js: 'public/build/js'
}

function css() {
    return src(srcFile.scss) //Identificar el archivo .SCCS a compilar
        .pipe(sourcemaps.init())
        .pipe(sass()) // Compilarlo
        .pipe(postcss([autoprefixer(), cssnano()])) //Mimificar CSS
        .pipe(sourcemaps.write('.'))
        .pipe(dest(build.css)) //Almacenarlo
}

function img() {
    return src(srcFile.img)
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest(build.img))
}

function javascript() {
    return src(srcFile.js)
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(build.js))
}

function watchArchivos() {
    watch(srcFile.scss, css);
    watch(srcFile.img, img);
    watch(srcFile.js, javascript);
}

exports.css = css;
exports.img = img;
exports.javascript = javascript;
exports.default = watchArchivos;
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

const srcFile = {
    scss: 'src/scss/**/*.scss'
}

const build = {
    css: 'public/build/css'
}

function css() {
    return src(srcFile.scss) //Identificar el archivo .SCCS a compilar
        .pipe(sourcemaps.init())
        .pipe(sass()) // Compilarlo
        .pipe(postcss([autoprefixer(), cssnano()])) //Mimificar CSS
        .pipe(sourcemaps.write('.'))
        .pipe(dest(build.css)) //Almacenarlo
}

function watchArchivos() {
    watch(srcFile.scss, css)
}

exports.css = css;
exports.watchArchivos = watchArchivos;
//************************************************************************* */
//Librerias
//************************************************************************* */
const { src, dest, parallel, watch } = require('gulp'); // Gulp
const sass = require('gulp-sass')(require('sass')); // Compilador de SASS
//---------------------------------------------------------------------------
//************************************************************************* */

const srcFile = {
    scss: 'src/scss/**/*.scss'
}

const build = {
    css: 'public/build/css'
}

function css(done) {
    src(srcFile.scss) //Identificar el archivo .SCCS a compilar
        .pipe(sass()) // Compilarlo
        .pipe(dest('public/build/css')) //Almacenarlo
    done();
}

exports.css = css;
const {src, dest, series, watch} = require('gulp') 
var sass = require('gulp-sass')(require('sass'))
const csso = require('gulp-csso')
const include = require('gulp-file-include')
const htmlmin = require('gulp-htmlmin')
const del = require('del')
const concat = require('gulp-concat')
const autoprefixer = require('gulp-autoprefixer')
const sync = require('browser-sync').create()
const imgCompress = require('imagemin-jpeg-recompress')
const imagemin = require('gulp-imagemin')
const minify = require('gulp-minify')
 

function scss() {
  return src('src/scss/**.scss')
    .pipe(sass())
    .pipe(autoprefixer({
      overrideBrowserslist:  ['last 2 versions'],
    }))
    .pipe(csso())
    .pipe(concat('style.css'))
    .pipe(dest('../assets/css'))
}

function js() {
  return src('src/js/**/*.js')  
    .pipe(concat('main.js'))
    .pipe(minify())
    .pipe(dest('../assets/js'))
} 
function images() { 
  return src('src/img/**/*') 
  .pipe(dest('../assets/img'));
};

function clear() {
  return del('assets')
}

function buildCopy(){
    return src([  
        'src/fonts/**/*',  
    ],
    {
       base: 'src' 
    })
    .pipe(dest('../assets'))
}

function pathCopy(){
    return src([  
        'src/template-parts/**/*',  
    ],
    {
       base: 'src' 
    })
    .pipe(dest('../assets'))
}

function serve() {  
  watch('src/js/**.js', series(js)).on('change', sync.reload)
  watch('src/img/**/*', series(images)).on('change', sync.reload)
  watch('src/scss/**.scss', series(scss)).on('change', sync.reload) 
}
 
exports.serve = series(clear, scss, js, buildCopy, images, pathCopy, serve)
exports.clear = clear
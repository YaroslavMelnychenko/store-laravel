var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    autoprfxr = require('gulp-autoprefixer'),
    cssmin = require('gulp-clean-css'),
    csscomb = require('gulp-csscomb'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    browserSync = require('browser-sync'),
    gcmq = require('gulp-group-css-media-queries'),
    smartgrid = require('smart-grid');

var path = {
    assembled: {
        js: 'public/assembled/js/*.js',
        css: 'public/assembled/css/*.css'
    },
    minified: {
        js: 'public/minified/js/',
        css: 'public/minified/css/'
    },
    img: {
        origin: 'resources/assets/img/*.*',
        minified: 'public/assets/img/'
    }
}

gulp.task('minify:js', function () {
    gulp.src(path.assembled.js)
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.minified.js));
});

gulp.task('minify:css', function () {
    gulp.src(path.assembled.css)
        .pipe(autoprfxr())
        .pipe(gcmq())
        .pipe(csscomb())
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.minified.css))
});

gulp.task('minify:img', function () {
    gulp.src(path.img.origin)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.img.minified));
});

gulp.task('watch', ['minify'], function () {
    gulp.watch(path.assembled.js, ['minify:js']);
    gulp.watch(path.assembled.css, ['minify:css']);
    gulp.watch(path.img.origin, ['minify:img']);
});

gulp.task('minify', [
    'minify:js',
    'minify:css',
    'minify:img'
]);
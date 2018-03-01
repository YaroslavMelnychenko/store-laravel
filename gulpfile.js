var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    autoprfxr = require('gulp-autoprefixer'),
    cssmin = require('gulp-clean-css'),
    csscomb = require('gulp-csscomb'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    gcmq = require('gulp-group-css-media-queries'),
    smartgrid = require('smart-grid');

var path = {
    js: {
        assembled: 'public/js/assembled/*.js',
        minified: 'public/js/minified/'
    },
    css: {
        assembled: 'public/css/assembled/*.css',
        minified: 'public/css/minified/'
    },
    img: {
        origin: 'resources/assets/img/*.*',
        minified: 'public/assets/img/'
    },
    favs: {
        origin: 'resources/assets/favs/*.*',
        minified: 'public/assets/favs/'
    }
};

gulp.task('minify:js', function () {
    gulp.src(path.js.assembled)
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.js.minified));
});

gulp.task('minify:css', function () {
    gulp.src(path.css.assembled)
        .pipe(autoprfxr())
        .pipe(gcmq())
        .pipe(csscomb())
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(path.css.minified))
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
    gulp.src(path.favs.origin)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.favs.minified));
});

gulp.task('minify', [
    'minify:js',
    'minify:css',
    'minify:img'
]);

gulp.task('watch', ['minify'], function () {
    gulp.watch(path.js.assembled, ['minify:js']);
    gulp.watch(path.css.assembled, ['minify:css']);
    gulp.watch(path.img.assembled, ['minify:img']);
});
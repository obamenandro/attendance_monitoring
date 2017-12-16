var gulp = require('gulp'),
    uglify = require("gulp-uglify"),
    sass = require('gulp-sass'),
    neat = require('node-neat').includePaths,
    cssmin = require('gulp-cssmin'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    babel = require("gulp-babel"),
    paths = {
        css_dir:  './',
        cssmin_dir: './',
        scss: './scss/*.scss',
        css:  './style.css',
    };

gulp.task('styles', function () {
    return gulp.src(paths.scss)
        .pipe(plumber({
            errorHandler: function(err) {
            console.log(err.messageFormatted);
            this.emit('end');
            }
        }))
        .pipe(sass({
            includePaths: [paths.scss].concat(neat),

        }))
        .pipe(gulp.dest(paths.css_dir))
});


gulp.task('css.min', function() {
    return gulp.src([paths.css])
        .pipe(plumber())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(paths.cssmin_dir));
});


gulp.task('minify', function () {
    gulp.start(['css.min'],['js.uglify']);
});

gulp.task('watch', function () {
    gulp.watch([ paths.scss, paths.css ], ['styles','css.min']);
});


gulp.task('default',function(){
    gulp.start('watch');
});

require('es6-promise').polyfill();

var gulp            = require('gulp');
var browserSync     = require('browser-sync').create();
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var rtlcss          = require('gulp-rtlcss');
var rename          = require('gulp-rename');
var imagemin        = require('gulp-imagemin');
var plumber         = require('gulp-plumber');
var gutil           = require('gulp-util');
var concat          = require('gulp-concat');
var uglify          = require('gulp-uglify');
var reload          = browserSync.reload;

// Error Handling
var onError = function (err) {
    console.log('An error occured:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
};

// Browser-Sync
gulp.task ('browser-sync', function () {
    browserSync.init({
        proxy: "eddie.dev"
    });
});

// Compile SCSS, Autoprefix CSS, and Generate RTL.css
gulp.task('sass', function () {
    return gulp.src('scss/*.scss')
        .pipe(plumber({errorHandler: onError}))
        .pipe(sass()).pipe(autoprefixer()).pipe(gulp.dest('./')) // Output LTR stylesheets (style.css)
        .pipe(rtlcss()) // Convert to RTL
        .pipe(rename({basename: 'rtl'})) // Rename to rtl.css
        .pipe(gulp.dest('./')) // Output RTL sytlesheets (rtl.css)
        .pipe(browserSync.reload({stream: true})); // prompts a reload after compilation
});

// Optimize Images
gulp.task('images', function () {
    return gulp.src('/img/raw/*')
        .pipe(imagemin({optimizationLevel: 7, progressive: true}))
        .pipe(gulp.dest('./img'));
})

// Concat and Uglify JS
gulp.task('js', function () {
    return gulp.src(['./js/*.js'])
        .pipe(concat('custom.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('./js'))
});

// Watch Files for Changes
gulp.task('watch', ['browser-sync'], function () {
    gulp.watch("scss/*.scss", ['sass']);
    gulp.watch("*.php").on('change', reload);
    gulp.watch("img/raw/*", ['images', reload]);
    gulp.watch("./js/*.js", ['js', reload]);
});

// Default Task
gulp.task('default', ['browser-sync', 'sass', 'images', 'js', 'watch'], function() {
    console.log('Gulp and Running....')
});

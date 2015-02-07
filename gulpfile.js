var gulp        = require('gulp');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');
var less = require('gulp-less');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var filter      = require('gulp-filter');
var notify = require("gulp-notify");
var concat = require('gulp-concat');
var rev = require('gulp-rev-append');
var streamqueue = require('streamqueue');


// Process LESS
gulp.task('less', function () {
    var stream = gulp.src('./resources/assets/less/main.less')

    // Use plumber to output errors through Notify
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %> | Extract: <%= error.extract %>")}))

    // initialize source-maps
    .pipe(sourcemaps.init())

    // Do the processing
    .pipe(less({
        compress: true
    }))

    // Write source maps to file
    .pipe(sourcemaps.write('.'))

    // Write processed data to file
    .pipe(gulp.dest('./public/css/'))

    // Filtering stream to only relevant files get passed to browser sync for injection & Notify upon successful completion!
    .pipe(filter('**/*.css'))
    .pipe(notify("Less Gulped!"))
    .pipe(browserSync.reload({stream:true}));

});


// Process JS
gulp.task('js', function() {

    return streamqueue({ objectMode: true },

            gulp.src([
                './resources/assets/js/classie.js',
                './resources/assets/js/sidebar.js',
                './resources/assets/js/main.js',
            ]).pipe(concat('main.js')),

            gulp.src([
                './bower_components/isotope/dist/isotope.pkgd.min.js',
                    './bower_components/imagesloaded/imagesloaded.pkgd.js',
                        './resources/assets/js/projects.js',
            ]).pipe(concat('projects.js'))
        )

         // Use plumber to output errors through Notify
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %> | Extract: <%= error.extract %>")}))

        // initialize source-maps
        .pipe(sourcemaps.init())

        // Do the processing
        .pipe(uglify({
            compress: false,
            mangle: false
        }))

        // Write source maps to file
        .pipe(sourcemaps.write('.'))

        // Write processed data to file
        .pipe(gulp.dest('./public/js/'))

        // Notify upon successful completion & reload page via Browser-sync
        .pipe(notify("Scripts Gulped!"))
        .pipe(browserSync.reload());
});


// Rev file referrences for cache-busting reasons
gulp.task('rev', function() {
  gulp.src('./resources/views/partials/htmlhead.blade.php')
    .pipe(rev())
    .pipe(gulp.dest('./resources/views/partials/'));
});


// Browser-Sync
gulp.task('browser-sync', function() {
    browserSync({
        proxy: "dan-powell.dev",
        browser: "google chrome"
    });
});


// Reload all Browsers using browser-sync
gulp.task('bs-reload', function () {
    browserSync.reload();
});


// Watch files, doing different things with each type.
gulp.task('default', ['browser-sync'], function () {
    gulp.watch("./resources/assets/less/**/*.less", ['less']);
    gulp.watch("./resources/assets/js/**/*.js", ['js']);
    gulp.watch("./resources/views/**/*.php", ['bs-reload']);
});




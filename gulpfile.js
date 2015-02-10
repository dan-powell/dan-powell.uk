// Load Gulp plugins
var gulp        = require('gulp');
var plumber = require('gulp-plumber');
var less = require('gulp-less');
var uglify = require('gulp-uglify');
var filter      = require('gulp-filter');
var concat = require('gulp-concat');
var streamqueue = require('streamqueue');
var sourcemaps = require('gulp-sourcemaps');
var notify = require("gulp-notify");
var browserSync = require('browser-sync');
var mergeStream = require('merge-stream');

var config = require('./assetconfig.json');

// Process LESS
gulp.task('less', function () {


    // Merges multiple streams together - Allows multiple groups of scripts to be processed through one pipe.
    var mergeSources = function(i, source) {
        //Check if this is the last iteration or not
        if (i > 0){
            // Merge the current stream with the next by a calling this function recursively
            return mergeStream(mergeSources(i - 1, source), gulp.src(source[i].input));
        } else {
            // Return last stream
            return gulp.src(source[i].input);
        }
    };

    // Merge the groups of scripts in to a single stream
    mergeSources(config.less.length - 1, config.less)

	    // Use plumber to output errors through Notify
	    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %> | Extract: <%= error.extract %>")}))

	    // initialize source-maps
	    .pipe(sourcemaps.init())

	    // Do the processing
	    .pipe(less({
            compress: false
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

        /*
            gulp.src([
                './resources/assets/js/classie.js',
                './resources/assets/js/sidebar.js',
                './resources/assets/js/main.js',
            ]).pipe(concat('main.js')),

            gulp.src([
                './bower_components/isotope/dist/isotope.pkgd.min.js',
                './bower_components/imagesloaded/imagesloaded.pkgd.js',
                './resources/assets/js/projects.js',
            ]).pipe(concat('projects.js')),

            gulp.src([
                './bower_components/bootstrap/js/modal.js',
                './bower_components/ekko-lightbox/dist/ekko-lightbox.min.js',
            ]).pipe(concat('bootstrap.js'))
        */


    // Merges multiple streams together - Allows multiple groups of scripts to be processed through one pipe.
    var mergeSources = function(i, source) {
        //Check if this is the last iteration or not
        if (i > 0){
            // Merge the current stream with the next by a calling this function recursively
            return mergeStream(mergeSources(i - 1, source), gulp.src(source[i].input).pipe(concat(source[i].output)));
        } else {
            // Return last stream
            return gulp.src(source[i].input).pipe(concat(source[i].output));
        }
    };

    // Merge the groups of scripts in to a single stream
    mergeSources(config.js.length - 1, config.js)

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
        .pipe(browserSync.reload({stream:true}));
});



gulp.task('copy', function() {
    gulp.src(config.copy[0].input)
        .pipe(gulp.dest(config.copy[0].output));
});



// Browser-Sync
gulp.task('browser-sync', function() {
    browserSync({
        proxy: config.proxy,
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




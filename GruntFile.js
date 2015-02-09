// Gruntfile
module.exports = function(grunt){

    var files = {
        js_app : [ // List JS application files here. Will be concatenated & minified in order.
            //'./bower_components/jquery-legacy/dist/jquery.min.js', // We are using jquery 1.x here, but swap this for the commented-out one below for cutting-edge jQuery.
            //'./bower_components/jquery/dist/jquery.min.js', // The latest jQuery release. (Only use if IE8 & older is definately not required)
            //'./bower_components/bootstrap/dist/js/bootstrap.min.js', // On larger projects, only include individual components as you need them.
            //'./bower_components/isotope/dist/isotope.pkgd.min.js', // On larger projects, only include individual components as you need them.
            //'./bower_components/isotope-packery/packery-mode.pkgd.js',
            //'./bower_components/imagesloaded/imagesloaded.pkgd.js',
            //'./bower_components/snap.svg/dist/snap.svg.js',
            //'./bower_components/ekko-lightbox/dist/ekko-lightbox.min.js',
            './resources/assets/js/classie.js',
            './resources/assets/js/sidebar.js',
            //'./app/assets/js/projects.js',
            './resources/assets/js/main.js',
        ],

        js_vendor : [ // List vendor frameworks. These will be individually copied to the public/assets/vendor folder for inclusion within the header.
            //'./bower_components/modernizr/modernizr.js',
            //'./bower_components/respondJS/dest/respond.min.js'
        ],

        js_projects : [
            './bower_components/isotope/dist/isotope.pkgd.min.js',
            './bower_components/imagesloaded/imagesloaded.pkgd.js',
            './resources/js/projects.js',
        ],

        fonts : './bower_components/fontawesome/fonts/*'
    }

    // Initialise the config object
    grunt.initConfig({

        // Grunt module configs
        // ------------------------------------

        less: {
            default: {
                options: {
                    paths: ["./public/assets/less"],
                    compress: true,
                    cleancss: true
                },
                files: {
                    "./public/css/main.css": "./resources/assets/less/main.less",
                    "./public/css/browser_fixes.min.css": "./resources/assets/less/browser_fixes.less"
                }
            }
        },


        // Uglify JS Processor
        /* Concates and minifies JS */
        uglify: {
            options: {
                mangle: false
            },
            default: {
                files: {
                    './public/assets/js/main.built.min.js' : files.js_app,
                    './public/assets/js/projects.built.min.js' : files.js_projects
                }
            }
        },

        // Cache Buster
        /* Finds links to static assets and appends random parameter, forcing browsers to refresh cache  */
        asset_cachebuster: {
            options: {
                buster: Date.now(),
                htmlExtension: 'php'
            },
            default: {
                files: {
                    './resources/views/partials/htmlhead.blade.php': './resources/views/partials/htmlhead.blade.php',
                    './resources/views/partials/htmlfoot.blade.php': './resources/views/partials/htmlfoot.blade.php',
                    './public/css/main.css': './public/css/main.css'
                }
            }
        },

        copy: {
            vendor_js: {
                src: files.js_vendor,
                dest: './public/js/vendor',
                expand: true,
                flatten: true,
                filter: 'isFile'
            },
            fonts: {
                src: files.fonts,
                dest: './public/fonts',
                expand: true,
                flatten: true,
                filter: 'isFile'
            }
        }

    });


    // Tasks Configs
    // ------------------------------------

    grunt.registerTask('default', [
        'less',
        'uglify',
        'copy:vendor_js',
        'copy:fonts',
        'asset_cachebuster'
    ]);

    // Module Imports
    // ------------------------------------

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-asset-cachebuster');
};
// Gruntfile
module.exports = function(grunt){


    var config = grunt.file.readJSON('assetConfig.json');


    parseIO = function(source) {

        obj = {};
        for (i=0; i < source.length; i++) {
            obj[source[i].output] = source[i].input;
        }
        return obj;

    }


    parseCopy = function(source) {

        setProps = function(i) {
            obj2 = {};
                obj2.src = source[i].input;
                obj2.dest = source[i].output;
                obj2.expand = true;
                obj2.flatten = true;
                obj2.filter = 'isFile';
            return obj2;
        }

        obj = {};
        for (i=0; i < source.length; i++) {
            obj['copy' + i] = setProps(i);
        }

        return obj;

    }


    // Initialise the config object
    grunt.initConfig({

        // Grunt module configs
        // ------------------------------------

        less: {
            default: {
                options: {
                    paths: ["./public/css"],
                    compress: true,
                    cleancss: true
                },
                files: parseIO(config.less)
            }
        },


        // Uglify JS Processor
        /* Concates and minifies JS */
        uglify: {
            options: {
                mangle: false
            },
            default: {
                files: parseIO(config.js)
            }
        },

        // Cache Buster
        /* Finds links to static assets and appends random parameter, forcing browsers to refresh cache  */
        asset_cachebuster: {
            options: {
                buster: Date.now(),
                htmlExtension: ['php', 'tpl', 'html']
            },
            default: {
                files: parseIO(config.cachebust)
            }
        },

        copy: parseCopy(config.copy)

    });


    // Tasks Configs
    // ------------------------------------

    grunt.registerTask('default', [
        'less',
        'uglify',
        'copy',
        'asset_cachebuster'
    ]);


    // Module Imports
    // ------------------------------------

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-asset-cachebuster');
};
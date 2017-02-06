module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            // 2. Configuration for concatinating files goes here.
            dist: {
                src: [
                    'assets/js/vendor/jquery-1.11.3.min.js',
                    // 'assets/js/vendor/jquery.validate.js',
                    // 'assets/js/vendor/messages_es.js',
                    'assets/js/vendor/bootstrap.min.js',
                    // 'assets/js/vendor/jquery.bxslider.js',
                    // 'assets/js/vendor/jquery.hash-tabs.js',
                    'assets/js/vendor/response.min.js',
                    // 'assets/js/vendor/slick.min.js',
                    // 'assets/js/vendor/scrollReveal.min.js',
                    // 'assets/js/vendor/bootstrap-select.min.js',
                    // 'assets/js/vendor/jquery.materialize.min.js',
                    // 'assets/js/vendor/jquery.magnific-popup.min.js',
                    // 'assets/js/vendor/jquery.lockfixed.js',
                    'assets/js/vendor/jquery.form.min.js',
                    'assets/js/src/*.js', // All JS in the libs folder
                    'assets/js/plugins.js',  // This specific file
                    'assets/js/main.js',  // This specific file
                    'assets/js/form.js'  // form ajax
                ],
                dest: 'assets/js/production.js',
            }
        },

        uglify: {
            base: {
                files: {
                    'web/js/main.min.js': ['assets/js/production.js'],
                    'web/js/map.min.js': ['assets/js/map.js'],
                }
            }
        },

        //imagemin: {
        //    dynamic: {
        //        files: [{
        //            expand: true,
        //            cwd: 'assets/img/',
        //            src: ['**/*.{png,jpg,gif,svg}'],
        //            dest: 'web/img/'
        //        }]
        //    }
        //},

        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    outputStyle: 'compressed'
                }
            }
        },

        watch: {
            scripts: {
                files: ['assets/js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false,
                }
            },
            images: {
                files: ['assets/img/**/*.{png,jpg,gif,svg}'],
                tasks: ['imagemin'],
                options: {
                spawn: false,
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'compass']);


};

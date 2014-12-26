module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            css: {
                options: {
                    compress: false,
                    yuicompress: false,
                    optimization: 0
                },
                files: {
                    'assets/css/style.css': [ 'assets/less/style.less' ]
                }
            }
        },
        concat: {
            js: {
                options: {
                    separator: ';'
                },
                src: [
                    'assets/js/laroux.js',
                    'assets/js/script.js'
                ],
                dest: 'assets/js/<%= pkg.name %>.js'
            },
            css: {
                src: [
                    'assets/css/bootstrap.css',
                    'assets/css/font-awesome.css',
                    'assets/css/laroux.css',
                    'assets/css/fonts.css',
                    'assets/css/style.css'
                ],
                dest: 'assets/css/<%= pkg.name %>.css'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            js: {
                files: {
                    'assets/js/<%= pkg.name %>.min.js': ['<%= concat.js.dest %>']
                }
            }
        },
        cssmin: {
            css: {
                src: 'assets/css/<%= pkg.name %>.css',
                dest: 'assets/css/<%= pkg.name %>.min.css'
            }
        },
        jshint: {
            options: {
                // options here to override JSHint defaults
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            },
            files: [
                'Gruntfile.js',
                'assets/js/script.js'
            ]
        },
        watch: {
            less: {
                files: ['assets/less/**/*.less'],
                tasks: ['less:css'],
                options: {
                    nospawn: true
                }
            },
            css: {
                files: ['<%= concat.css.src %>'],
                tasks: ['concat:css', 'cssmin:css']
            },
            js: {
                files: ['<%= concat.js.src %>'],
                tasks: ['jshint', 'concat:js', 'uglify:js']
            }
        },
        clean: {
            all: {
                src: [
                    'assets/js/<%= pkg.name %>.js',
                    'assets/js/<%= pkg.name %>.min.js',
                    'assets/css/<%= pkg.name %>.css',
                    'assets/css/<%= pkg.name %>.min.css'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');

    grunt.registerTask('test', ['jshint']);
    grunt.registerTask('js', ['jshint', 'concat:js', 'uglify:js']);
    grunt.registerTask('css', ['less:css', 'concat:css', 'cssmin:css']);
    grunt.registerTask('default', ['jshint', 'concat:js', 'uglify:js', 'less:css', 'concat:css', 'cssmin:css']); // , 'copy'

};
module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            js: {
                options: {
                    separator: ';'
                },
                src: [
                    'js/jquery-2.0.3.js',
                    'js/bootstrap.js',
                    'js/script.js'
                ],
                dest: 'js/<%= pkg.name %>.js'
            },
            css: {
                src: [
                    'css/bootstrap.css',
                    'css/font-awesome.css',
                    'css/fonts.css',
                    'css/style.css'
                ],
                dest: 'css/<%= pkg.name %>.css'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            js: {
                files: {
                    'js/<%= pkg.name %>.min.js': ['<%= concat.js.dest %>']
                }
            }
        },
        cssmin: {
            css: {
                src: 'css/<%= pkg.name %>.css',
                dest: 'css/<%= pkg.name %>.min.css'
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
                'js/script.js'
            ]
        },
        watch: {
            files: ['<%= concat.js.src %>', '<%= concat.css.src %>'],
            tasks: ['jshint', 'concat:js', 'uglify:js', 'concat:css', 'cssmin:css']
        },
        clean: {
            all: {
                src: [
                    'js/<%= pkg.name %>.js',
                    'js/<%= pkg.name %>.min.js',
                    'css/<%= pkg.name %>.css',
                    'css/<%= pkg.name %>.min.css'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');

    grunt.registerTask('test', ['jshint']);
    grunt.registerTask('default', ['jshint', 'concat:js', 'uglify:js', 'concat:css', 'cssmin:css']); // , 'copy'

};
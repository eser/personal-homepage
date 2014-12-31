module.exports = function(grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            css: {
                options: {
                    strictMath: true,
                    compress: false,
                    yuicompress: false,
                    optimization: 0
                },
                files: {
                    'assets/temp/main_pure.css': ['assets/css/main.less']
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
                    'assets/js/main.js'
                ],
                dest: 'assets/js/<%= pkg.name %>.js'
            },
            css: {
                src: [
                    'assets/temp/main_comb.css'
                ],
                dest: 'assets/css/<%= pkg.name %>.css'
            }
        },
        uglify: {
            options: {
                preserveComments: false,
                mangle: {
                    except: ['laroux']
                }
            },
            js: {
                files: {
                    'assets/js/<%= pkg.name %>.min.js': ['<%= concat.js.dest %>']
                }
            }
        },
        csscomb: {
            options: {
                config: 'assets/css/.csscomb.json'
            },
            css: {
                src: 'assets/temp/main_pure.css',
                dest: 'assets/temp/main_comb.css'
            }
        },
        csslint: {
            options: {
                csslintrc: 'assets/css/.csslintrc'
            },
            css: {
                src: [
                    'assets/css/<%= pkg.name %>.css'
                ]
            }
        },
        cssmin: {
            options: {
                compatibility: 'ie8',
                keepSpecialComments: 0,
                advanced: false
            },
            css: {
                src: 'assets/css/<%= pkg.name %>.css',
                dest: 'assets/css/<%= pkg.name %>.min.css'
            }
        },
        jshint: {
            grunt: {
                src: [
                    'Gruntfile.js'
                ]
            },
            js: {
                options: {
                    jshintrc: 'assets/js/.jshintrc'
                },
                src: [
                    'assets/js/main.js'
                ]
            },
            tests: {
                src: [
                    'assets/js/tests/**/*.js'
                ]
            }
        },
        jscs: {
            options: {
                config: 'assets/js/.jscsrc'
            },
            grunt: {
                src: '<%= jshint.grunt.src %>'
            },
            js: {
                src: '<%= jshint.js.src %>'
            },
            tests: {
                src: '<%= jshint.tests.src %>'
            }
        },
        karma: {
            tests: {
                configFile: 'assets/js/karma.conf.js'
            }
        },
        watch: {
            js: {
                files: ['<%= concat.js.src %>'],
                tasks: ['jshint:js', 'jscs:js', 'concat:js', 'uglify:js']
            },
            less: {
                files: ['assets/css/main.less'],
                tasks: ['less:css'],
                options: {
                    nospawn: true
                }
            },
            css: {
                files: ['<%= concat.css.src %>'],
                tasks: ['concat:css', 'clean:tempcss', 'csslint:css', 'cssmin:css']
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
            },
            tempcss: {
                src: [
                    'assets/temp/main_pure.css',
                    'assets/temp/main_comb.css'
                ]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-csscomb');
    grunt.loadNpmTasks('grunt-jscs');
    grunt.loadNpmTasks('grunt-karma');

    grunt.registerTask('selftest', ['jshint:grunt', 'jscs:grunt']);
    grunt.registerTask('test', ['jshint:tests', 'jscs:tests', 'karma']);
    grunt.registerTask('js', ['jshint:js', 'jscs:js', 'concat:js', 'uglify:js']);
    grunt.registerTask('css', ['less:css', 'csscomb:css', 'concat:css', 'clean:tempcss', 'csslint:css', 'cssmin:css']);
    grunt.registerTask('default', ['js', 'css', 'test']); // , 'copy'

};

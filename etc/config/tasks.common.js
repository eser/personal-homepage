module.exports = {
    bundles: {
        main: {
            banner: [
                '/**',
                ' * <%= pkg.name %> - <%= pkg.description %> (<%= pkg.bundle %> bundle)',
                ' *',
                ' * @version v<%= pkg.version %>',
                ' * @link <%= pkg.link %>',
                ' * @license <%= pkg.license %>',
                ' */',
                ''
            ].join('\n'),

            jsFiles: [
                './client/src/js/**/*.js',
                '!./client/src/js/lib/**/*.js'
            ],

            jsBrowsifyEntryPoints: [
                'index.js'
            ],

            jsBrowsifyOutputFile: '_browserified.js',

            tagFiles: [
                './client/src/tag/**/*.tag'
            ],

            lessFiles: [
                './client/src/less/main.less'
            ],

            cssFiles: [
                './client/src/css/**/*.css',
                '!./client/src/css/lib/**/*.css'
            ],

            testFiles: [
                './client/tests/**/*.js'
            ],

            packs: {
                './assets/scripts/main.js': {
                    uglify: true,
                    minifyCSS: false,
                    csscomb: false,
                    header: true,
                    files: [
                        // './client/src/js/lib/jquery/jquery-2.1.3.js',
                        // './client/src/js/lib/bootstrap/transition.js',
                        // './client/src/js/lib/bootstrap/alert.js',
                        // './client/src/js/lib/bootstrap/button.js',
                        // './client/src/js/lib/bootstrap/carousel.js',
                        // './client/src/js/lib/bootstrap/collapse.js',
                        // './client/src/js/lib/bootstrap/dropdown.js',
                        // './client/src/js/lib/bootstrap/modal.js',
                        // './client/src/js/lib/bootstrap/tooltip.js',
                        // './client/src/js/lib/bootstrap/popover.js',
                        // './client/src/js/lib/bootstrap/scrollspy.js',
                        // './client/src/js/lib/bootstrap/tab.js',
                        // './client/src/js/lib/bootstrap/affix.js',
                        './client/src/js/lib/laroux.js/laroux.js',
                        '~/main/js/_browserified.js'
                    ]
                },

                './assets/styles/main.css': {
                    uglify: false,
                    minifyCSS: true,
                    csscomb: true,
                    header: true,
                    files: [
                        '~/main/css/**/*.css',
                        './client/src/css/lib/laroux.js/laroux.css',
                        './client/src/css/lib/font-awesome/font-awesome.css'
                    ]
                }
            }
        }
    },

    selfCheckFiles: [
        './gulpfile.js',
        './etc/config/**/*.js',
        './etc/tasks/**/*.js',
        './etc/utils/**/*.js',
        './client/tests/**/*.js'
    ],

    cleanFiles: [
        './client/build/reports/coverage/**/*',
        '!./client/build/reports/coverage/.gitkeep',
        './client/build/temp/**/*',
        '!./client/build/temp/.gitkeep'
    ]
};

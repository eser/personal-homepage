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

            jsPreprocessVars: {
                BUNDLE: 'main',
                ENV: 'main',
                COMPAT: true
            },

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

            packs: [
                {
                    uglify: true,
                    minifyCSS: false,
                    csscomb: false,
                    header: true,
                    concat: 'main.js',
                    dest: './assets/scripts/',
                    files: [
                        './client/src/js/lib/laroux.js/laroux.js',
                        '~/main/js/_browserified.js'
                    ]
                },

                {
                    uglify: false,
                    minifyCSS: true,
                    csscomb: true,
                    header: true,
                    concat: 'main.css',
                    dest: './assets/styles/',
                    files: [
                        '~/main/css/**/*.css',
                        './client/src/css/lib/laroux.js/laroux.css',
                        './client/src/css/lib/font-awesome/font-awesome.css'
                    ]
                }
            ]
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

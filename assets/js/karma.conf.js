module.exports = function(config) {
    config.set({
        basePath: '',
        frameworks: ['jasmine'],
        files: [
            'eser-ozvataf-com.js',
            'tests/**/*.js'
        ],
        exclude: [],
        preprocessors: {
            'tests/**/*.js': ['coverage']
        },
        reporters: ['dots', 'coverage'],
        port: 9876,
        colors: true,
        logLevel: config.LOG_INFO,
        autoWatch: true,
        browsers: ['PhantomJS'],
        singleRun: true,
        coverageReporter: {
            type: 'lcov',
            dir: '../reports/tests_coverage/'
        }
    });
};
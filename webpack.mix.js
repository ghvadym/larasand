const mix = require('laravel-mix');


mix
    .sass('resources/scss/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 2 versions'],
                cascade: false
            })
        ]
    })
    .sourceMaps(true, 'source-map');
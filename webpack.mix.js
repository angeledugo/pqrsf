const mix = require('laravel-mix');
const rimraf = require('rimraf');
const ReplaceInFileWebpackPlugin = require('replace-in-file-webpack-plugin');
const path = require('path');
const glob = require('glob');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css/app.css').then( () => {
        rimraf(path.resolve('public/img'), () => {});
    }).sourceMaps(!mix.inProduction());

mix.sass('resources/css/plugins.scss', 'public/plugins/plugins.bundle.css').then(() => {
    // remove unused preprocessed fonts folder
    rimraf(path.resolve('public/global/fonts'), () => {});
    rimraf(path.resolve('public/images'), () => {});
}).sourceMaps(!mix.inProduction())

    mix.webpackConfig({
        plugins: [
            new ReplaceInFileWebpackPlugin([
                {
                    // rewrite font paths
                    dir: path.resolve('public/plugins/global'),
                    test: /\.css$/,
                    rules: [
                        {
                            // fontawesome
                            search: /url\((\.\.\/)?webfonts\/(fa-.*?)"?\)/g,
                            replace: 'url(./fonts/@fortawesome/$2)',
                        },
                    ]
                }
            ])
        ]
    });
                

    // Cargando de Forma manual las fuentes
   
    (glob.sync('node_modules/+(@fortawesome|socicon|line-awesome)/**/*.+(woff|woff2|eot|ttf)') || []).forEach(file => {
        var folder = file.match(/node_modules\/(.*?)\//)[1];
        mix.copy(file, `public/plugins/global/fonts/${folder}/${path.basename(file)}`);
    });
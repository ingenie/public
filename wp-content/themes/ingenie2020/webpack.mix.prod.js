
const mix = require('laravel-mix');
const glob = require('glob-all');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

// const fs = require('fs');

require('laravel-mix-versionhash');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.setPublicPath('./build');

mix.webpackConfig({
  plugins: [
    new CleanWebpackPlugin({
      // dry: true,
      // verbose: true,
      cleanOnceAfterBuildPatterns: ['./build']
    })
  ],
  externals: {
    "jquery": "jQuery",
  }

});

// fs.stat('./local', function (access) {
//   if (access.errno >= 0) {
//     const local = require('./local');
//     if (local.proxy) {
//       mix.browserSync({
//         proxy: local.proxy,
//         injectChanges: true,
//         open: false,
//         files: [
//           'build/**/*.{css,js}',
//           'templates/**/*.php'
//         ]
//       });
//     }
//   }
// });

mix.tailwind();

mix.js('assets/js/app.js', 'js');
mix.sass('assets/scss/app.scss', 'css');
// Copy fonts over to build
mix.copyDirectory('assets/font/vendor', 'build/css/fonts');

// The package internally limits running to production builds so we don't need
// to wrap this up with a condition.
mix.purgeCss({
  paths: () => glob.sync([
    path.join(__dirname, '*.php'),
    path.join(__dirname, 'templates/**/**/*.php'),
    path.join(__dirname, 'build/js/**/*.js'),
  ]),
  whitelistPatterns: [
    // TODO: Might be able to tighten this up later WATCH OUT FOR THIS!!
    /bg-ydg-tips-support-500/,
    /bg-ydg[-]on-the-road[-]500/,
    /bg-ydg[-]learning-to-drive[-]500/,
    /bg-ydg[-]ingenie-blog[-]500/,
    /bg-ydg[-]car-insurance[-]500/,
    /bg-ydg[-]lifestyle[-]500/,
    /bg-ydg[-]parents-guide[-]500/,
    /bg-ig-li-blue-500/,
    /text-ydg[-]tips-support[-]500/,
    /text-ydg[-]on-the-road[-]500/,
    /text-ydg[-]learning-to-drive[-]500/,
    /text-ydg[-]ingenie-blog[-]500/,
    /text-ydg[-]car-insurance[-]500/,
    /text-ydg[-]lifestyle[-]500/,
    /text-ydg[-]parents-guide[-]500/,
    /heading[-]*/,
    /primary[-]btn/,
    /primary[-]btn[-]*/,
    /secondary[-]btn[-]*/,
    /standard-list/,
    /standard-card/,
    /bg-info-400/,
    /bg-success-400/,
    /bg-warning-400/,
    /bg-alert-400/,
    /text-info-900/,
    /text-success-900/,
    /text-warning-900/,
    /text-alert-900/,
    /small-print/
  ]

});

if (mix.inProduction()) {
  mix.versionHash();
  mix.sourceMaps();
}

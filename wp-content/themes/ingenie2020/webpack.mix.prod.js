
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
    path.join(__dirname, 'templates/**/*.php'),
    path.join(__dirname, 'includes/**/*.php'),
    path.join(__dirname, 'build/js/**/*.js'),
  ]),
  whitelistPatterns: [
    // TODO: Avoid using this as much as posssible
    // Use prugecss to expose dynamic tailwind classes 
    // Search project for: '{# purgecss:' for more context
    // or 'purgecss start ignore'

    // If it in the sylte guide template your golden 🏆 
    // At end of add below into style guide so these can be deleted.
    /max-w-md/,
    /max-w-lg/,
    /mb-16/,
    /text-dangerous/,
    /text-highly-dangerous/,
    /md:w-2\/12/,
    /w-10\/12/,
    /gap-2/,
    /pl-3/,
    /text-5xl/,
    /scale-100/,
    /lg:text-center/,
    /md:text-sm/,
    /lg:text-xl/,
    /lg:max-w-lg/,
    /top-44/,
    /md:pt-36/
  ]

});

if (mix.inProduction()) {
  mix.versionHash();
  mix.sourceMaps();
}

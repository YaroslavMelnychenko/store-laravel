# Starting Laravel template
## *Install to development*
1. Install `composer` dependencies using `composer install`.
2. Install `npm` dependencies using `npm install`.
3. Create `.env` file from `.env.example`.
4. Generate key using `php artisan key:generate`.
5. Profit!

All sass and js files from `resources/assets` will be bundled and compiled to 
`public/assembled` using command `npm run dev`.

All assembled files will be minified to `publlic/minified`
using command `gulp minify`.

To automate this process use two terminals:
1. First terminal will be working with `webpack` to bundle
and compile `js` and `sass`. Use `npm run watch` to automate this.
2. Second terminal will be minifying `js` and `css`. 
Use `gulp watch` to automate this.


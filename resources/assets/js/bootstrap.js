/* Including Laravel dependencies */

window._ = require('lodash');
window.Popper = require('popper.js').default;
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.log('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/* Including other libs */

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');
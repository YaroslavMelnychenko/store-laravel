require('./bootstrap');
require('./components/materialize/materialize');
require('./components/parallax/parallax');
require('./components/navbar');
require('./components/preloader');

Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('product', require('./components/Product.vue'));
Vue.component('feedback', require('./components/Feedback.vue'));
Vue.component('auth-modal', require('./components/AuthModal.vue'));

require('./pages/store');

$(document).ready(function(){
    $('input[data-length], textarea[data-length]').characterCounter();
});
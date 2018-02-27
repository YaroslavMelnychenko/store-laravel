require('./bootstrap');
require('./components/materialize/materialize');
require('./components/parallax/parallax');
require('./components/navbar');
require('./components/preloader');

Vue.component('paginator', require('./components/vue/Paginator.vue'));
Vue.component('product', require('./components/vue/Product.vue'));
Vue.component('feedback', require('./components/vue/Feedback.vue'));
Vue.component('auth-modal', require('./components/vue/AuthModal.vue'));

require('./pages/store');

$(document).ready(function(){
    $('input[data-length], textarea[data-length]').characterCounter();
});
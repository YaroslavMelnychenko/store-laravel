require('./bootstrap');
require('./components/materialize/materialize');
require('./components/parallax/parallax');
require('./components/navbar');

Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('product', require('./components/Product.vue'));

require('./pages/store');
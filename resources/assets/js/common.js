window.sliderHack = function (){
    $('.parallax.bottom').remove();
    $('#about-us-anchor').after('<section class="parallax parallax-window bottom" data-parallax="scroll" data-image-src="/assets/img/parallax1.png"></section>');
};

window.slideTo = function (id) {
    $('body,html').scrollTop(
        $(id).offset().top
    );
};

window.checkElement = function (selector) {
    if (document.querySelector(selector)) {
        return true;
    } else {
        return false;
    }
};

require('./bootstrap');
require('./components/materialize/materialize');
require('./components/parallax/parallax');
require('./components/navbar');
require('./components/preloader');

Vue.component('paginator', require('./components/vue/Paginator.vue'));
Vue.component('product', require('./components/vue/Product.vue'));
Vue.component('feedback', require('./components/vue/Feedback.vue'));
Vue.component('auth-modal', require('./components/vue/AuthModal.vue'));
Vue.component('categorizer', require('./components/vue/Categorizer.vue'));
Vue.component('admin-login', require('./components/vue/AdminLogin.vue'));

require('./pages/store');
require('./pages/admin');

$(document).ready(function(){
    $('input[data-length], textarea[data-length]').characterCounter();
});
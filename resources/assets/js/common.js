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

window.checkLength = function (val, max, min) {
    min = min || 1;
    if(val.length >= min && val.length <= max){
        return true;
    } else {
        return false;
    }
};

window.preloader = {
    on: function () {
        $('#preloader').removeClass('done');
    },
    off: function () {
        $('#preloader').addClass('done');
    }
};

window.emailRegExp = new RegExp(/^(([0-9a-zA-Z_]{1}[-0-9a-zA-Z_\.]{1,44}[0-9a-zA-Z_]{1})@([-0-9a-zA-Z]{1,10}\.){1,2}[-a-zA-Z]{2,6})$/);
window.nameRegExp = new RegExp(/^[`'a-zA-Zа-яА-ЯіІїЇєЄёЁ\s]{1,}$/u);
window.passwordRegExp = new RegExp(/^[a-zA-Z0-9-_\.]{1,}$/);

require('./bootstrap');
require('./components/materialize/materialize');
require('./components/parallax/parallax');
require('./components/navbar');
require('./components/preloader');
require('./components/notify');

Vue.component('paginator', require('./components/vue/Paginator.vue'));
Vue.component('product', require('./components/vue/Product.vue'));
Vue.component('feedback', require('./components/vue/Feedback.vue'));
Vue.component('auth-modal', require('./components/vue/AuthModal.vue'));
Vue.component('categorizer', require('./components/vue/Categorizer.vue'));
Vue.component('admin-login', require('./components/vue/AdminLogin.vue'));
Vue.component('notification', require('./components/vue/Notification.vue'));

require('./pages/store');
require('./pages/admin');

$(document).ready(function(){
    $('input[data-length], textarea[data-length]').characterCounter();
});
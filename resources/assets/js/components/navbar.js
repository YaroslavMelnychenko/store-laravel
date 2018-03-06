$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.js-link').click(function(e){
        e.preventDefault();
        var id = $(this).attr('data-target');
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
    $('.sidenav a, .sidenav button').click(function (e) {
        e.preventDefault();
        $('.sidenav').sidenav('close');
    });
    $('.profile-button').click(function () {
        location.href = '/profile';
    });
    $('.logout-button').click(function () {
        location.href = '/profile/logout';
    })
});
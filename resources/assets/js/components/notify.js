function ct() {
    var width = $(window).width();
    if (width < 992) {
        $('.notifies.with-navbar').addClass('top-mobile');
    } else {
        $('.notifies.with-navbar').removeClass('top-mobile');
    }

    var top = $(this).scrollTop();
    if (top > 100)
        $('.notifies.with-navbar').addClass('top');
    else
        $('.notifies.with-navbar').removeClass('top');
}

$(window).scroll(ct);
$(document).ready(ct);
$(window).resize(ct);
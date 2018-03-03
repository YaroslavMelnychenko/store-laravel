function ct() {
    var width = $(window).width();
    if (width < 992) {
        $('.notifies').addClass('top-mobile');
    } else {
        $('.notifies').removeClass('top-mobile');
    }

    var top = $(this).scrollTop();
    if (top > 100)
        $('.notifies').addClass('top');
    else
        $('.notifies').removeClass('top');
}

$(window).scroll(ct);
$(document).ready(ct);
$(window).resize(ct);
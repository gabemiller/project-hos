$(document).ready(function () {
    $('.main-nav-button').click(function () {
        $('.main-nav').toggleClass('is-open');
        $(this).toggleClass('is-open');
    });

    $('.owl-carousel').owlCarousel({
        'loop':true,
        'margin':15,
        'autoplay':true
    });

    lightbox.option({
        'alwaysShowNavOnTouchDevices': true,
        'wrapAround': true,
        'disableScrolling': true,
        'albumLabel': ''
    })
});




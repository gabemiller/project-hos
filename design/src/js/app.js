(function ($) {
    $('.main-nav-button').click(function () {
        $('.main-nav').toggleClass('is-open');
        $(this).toggleClass('is-open');
        $('body').toggleClass('remove-scrollbar');
    });

    $('.owl-carousel').owlCarousel({
        'loop': true,
        'margin': 15,
        'autoplay': true
    });

    lightbox.option({
        'alwaysShowNavOnTouchDevices': true,
        'wrapAround': true,
        'disableScrolling': true,
        'albumLabel': ''
    });

    var baseUrl = window.location.host;

    $('body').on('click',
        "a[href^='http:']:not([href*='" + baseUrl + "']), " +
        "a[href^='https:']:not([href*='" + baseUrl + "']), " +
        "a[href$='.pdf']:not([href*='" + baseUrl + "']), " +
        "a[href$='.pdf'], " +
        "a.external", function () {
            $(this).attr('target', '_blank');
        });
})(jQuery);



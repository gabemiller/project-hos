$(document).ready(function () {
    $('.main-nav-button').click(function () {
        $('.main-nav').toggleClass('is-open');
        $(this).toggleClass('is-open');
    });

    $('.owl-carousel').owlCarousel();
});




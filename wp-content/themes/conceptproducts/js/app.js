$(document).ready(function() {

    // $('.slick').slick({
    //     arrows: true,
    //     dots: true,
    //     infinite: true,
    //     speed: 500,
    //     fade: false,
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    //     slide: 'div.slide',
    //     cssEase: 'linear',
    //     nextArrow: '<div class="slick-arrow slick-next"><i class="fa fa-chevron-circle-right"></i></button>',
    //     prevArrow: '<div class="slick-arrow slick-prev"><i class="fa fa-chevron-circle-left"></i></button>'
    // });

    window.myFlux = new flux.slider('#slider', {
        pagination: true,
        autoplay: true,
        delay: 6000,
        transitions: ['bars']
    });

});
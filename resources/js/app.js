$(function () {

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 0,
        stagePadding:0,
        autoplay: true,
        autoplayTimeout: 7000,
        smartSpeed: 3000,
        autoplayHoverPause:  true,
        items: 5,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 5
            }
        },
    });

});
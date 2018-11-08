$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    responsiveClass: true,
    nav: true,
    navText: [" <img src='img/flecha.png' style='width:80px;padding-top:30px;'>", "<img src='img/flechader.png' style='width:80px;padding-top:30px;'>"],
    responsive: {
        0: {
            items: 1,
            loop:true,
            nav: true
        },
        600: {
            items: 3,
            loop:true,
            nav: true
        },
        1000: {
            items: 3,
            loop: true,
            nav: true
        }
    }
})
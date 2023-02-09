(function ($) {
    "use strict";

    // bootstrap dropdown hover

    // loader
    var loader = function () {
        setTimeout(function () {
            if ($("#loader").length > 0) {
                $("#loader").removeClass("show");
            }
        }, 1);
    };
    loader();

    $("nav .dropdown").hover(
        function () {
            var $this = $(this);
            $this.addClass("show");
            $this.find("> a").attr("aria-expanded", true);
            $this.find(".dropdown-menu").addClass("show");
        },
        function () {
            var $this = $(this);
            $this.removeClass("show");
            $this.find("> a").attr("aria-expanded", false);
            $this.find(".dropdown-menu").removeClass("show");
        }
    );

    $("#dropdown04").on("show.bs.dropdown", function () {
        console.log("show");
    });

    // home slider
    $(".home-slider").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        nav: true,
        autoplayHoverPause: true,
        items: 1,
        dragTouch: false,
        navText: [
            "<span class='ion-chevron-left'></span>",
            "<span class='ion-chevron-right'></span>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1,
                nav: false,
            },
            1000: {
                items: 1,
                nav: true,
            },
        },
    });

    $(".nonloop-block-11").owlCarousel({
        center: false,
        items: 1,
        loop: false,
        stagePadding: 20,
        margin: 50,
        nav: true,
        smartSpeed: 1000,
        navText: [
            '<span class="ion-chevron-left">',
            '<span class="ion-chevron-right">',
        ],
        responsive: {
            600: {
                stagePadding: 20,
                items: 1,
            },
            800: {
                stagePadding: 20,
                items: 1,
            },
            1000: {
                // stagePadding: 200,
                items: 1,
            },
        },
    });

    // owl carousel
    var majorCarousel = $(".js-carousel-1");
    majorCarousel.owlCarousel({
        loop: true,
        autoplay: true,
        stagePadding: 7,
        margin: 20,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        nav: true,
        autoplayHoverPause: true,
        items: 3,
        navText: [
            "<span class='ion-chevron-left'></span>",
            "<span class='ion-chevron-right'></span>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 2,
                nav: false,
            },
            1000: {
                items: 3,
                nav: true,
                loop: false,
            },
        },
    });

    // owl carousel
    var major2Carousel = $(".js-carousel-2");
    major2Carousel.owlCarousel({
        loop: true,
        autoplay: true,
        stagePadding: 7,
        margin: 20,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        nav: true,
        autoplayHoverPause: true,
        items: 4,
        navText: [
            "<span class='ion-chevron-left'></span>",
            "<span class='ion-chevron-right'></span>",
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 3,
                nav: false,
            },
            1000: {
                items: 4,
                nav: true,
                loop: false,
            },
        },
    });

    var contentWayPoint = function () {
        var i = 0;
        $(".element-animate").waypoint(
            function (direction) {
                if (
                    direction === "down" &&
                    !$(this.element).hasClass("element-animated")
                ) {
                    i++;

                    $(this.element).addClass("item-animate");
                    setTimeout(function () {
                        $("body .element-animate.item-animate").each(function (
                            k
                        ) {
                            var el = $(this);
                            setTimeout(function () {
                                var effect = el.data("animate-effect");
                                if (effect === "fadeIn") {
                                    el.addClass("fadeIn element-animated");
                                } else if (effect === "fadeInLeft") {
                                    el.addClass("fadeInLeft element-animated");
                                } else if (effect === "fadeInRight") {
                                    el.addClass("fadeInRight element-animated");
                                } else {
                                    el.addClass("fadeInUp element-animated");
                                }
                                el.removeClass("item-animate");
                            }, k * 100);
                        });
                    }, 100);
                }
            },
            { offset: "95%" }
        );
    };
    contentWayPoint();

    $(".navbar .dropdown > a").click(function () {
        location.href = this.href;
    });

    // var swiper = new Swiper(".models-swiper", {
    //     slidesPerView: 1,
    //     spaceBetween: 30,
    //     loop: true,
    //     // autoplay: true,
    //     centeredSlides: true,
    //     autoplay: {
    //         delay: 2500,
    //         disableOnInteraction: false,
    //     },
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    //     breakpoints: {
    //         640: {
    //             slidesPerView: 1,
    //             spaceBetween: 30,
    //         },
    //         768: {
    //             slidesPerView: 2,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 1,
    //             spaceBetween: 30,
    //         },
    //     },
    // });

    $(".slick").slick({
        arrows: true,
        dots: false,
        speed: 300,
        autoplay: true,
        draggable: true,
        centerPadding: "100",
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(".hero-slick").slick({
        arrows: true,
        dots: true,
        speed: 3000,
        autoplay: true,
        centerPadding: "100px",
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
    });

})(jQuery);

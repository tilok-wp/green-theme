(function($) {
    
    "use strict";

    //Start jquery
            // Menu toggleClass(Show Mobile Menu)
            $('.manubar-toggler').on('click', function () {
                $('.main-menu').toggleClass('show');
                $('.menu-right').toggleClass('show');
                $(this).toggleClass('show');
            });
    
            // Search button toggleClass
            $('.search-toggler').on('click', function () {
                $(this).toggleClass('show');
                $('.serarch-form form').toggleClass('show');
            });
    
        // Menu toggleClass(Fixed Top Menu)
        $(function() {
            var header = $(".header-main");
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
            
                if (scroll >= 200) {
                    header.addClass("header-fixed");
                } else {
                    header.removeClass("header-fixed");
                }
            });
        });

    //owlCarousel
    $(".testimonial-carousel").owlCarousel({
        loop: true,
        margin:30,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 6000,
        responsiveClass: true,
        navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
        items: 1
    });

    $(".blog-carousel").owlCarousel({
        loop: true,
        margin:25,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 8000,
        responsiveClass: true,
        responsive:{
            0:{
                items:1,
            },
            500:{
                items:1,
            },
            767:{
                items:2,
            },
            1000:{
                items:3,
                
            }
        }
    });
    
    $(".feature-carousel").owlCarousel({
        loop: true,
        margin:30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 6000,
        responsiveClass: true,
        responsive:{
            0:{
                items:2,
            },
            500:{
                items:2,
            },
            767:{
                items:3,
            },
            1000:{
                items:5,
                
            }
        }
    });
    $(".footer-carousel").owlCarousel({
        loop: true,
        margin:30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4500,
        responsiveClass: true,
        items:1,
    });

    //Hide Preloader
	$(window).on('load', function() {
		$('.preloader-area').delay(200).fadeOut(500);
	});
    // Scroll Top Icon Show & Hide
    $(function() {
        var myWindowScroll = 800;
        $(window).scroll(function() {    
            if ($(window).scrollTop() > myWindowScroll) {
                $("a.to-top").fadeIn("slow");
            } else {
                $("a.to-top").fadeOut("slow");
            }
        });
    });

    // Back To Top
    $("a.to-top").on("click", function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })


})(jQuery);

// Mixit UP 
// var mixer = mixitup('.portfolio-container');


/* Version: 1.1 | Last updated: 11-03-2026 */

(function ($) {
    "use strict";

    //wow animation
    new WOW().init();
    //Mobile nav
    var $main_nav = $('#main-nav');
    var $toggle = $('.toggle');
    var defaultOptions = {
        disableAt: false,
        customToggle: $toggle,
        levelSpacing: 10,
        navTitle: 'Menu',
        levelTitles: true,
        levelTitles: true,
        labelClose: false,
        levelTitleAsBack: true,
        levelOpen: 'expand',
        closeOnClick: true,
        insertClose: true,
        closeActiveLevel: true,
        insertBack: true
    };

    // Nav call plugin
    var Nav = $main_nav.hcOffcanvasNav(defaultOptions);

    //Sticky Header 
    function updateScroll() {
        if ($(window).scrollTop() >= 80) {
            $(".navfix").addClass('sticky');
        } else {
            $(".navfix").removeClass("sticky");
        }
    }
    $(function () {
        $(window).scroll(updateScroll);
        updateScroll();
    });

    //Header mega menu
    var $nav = $('li.sbmenu');
    $nav.hover(
        function () {
            $(this).addClass('hover');
        },
        function () {
            $(this).removeClass('hover');
        }
    );

    //Video magnificPopup
    $('.video-link').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
    });

    // home counter

    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#mycounterSection");
        if (!section) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter("count1", 10, "+");
                    animateCounter("count2", 900, "+");
                    animateCounter("count3", 10, "k");
                    animateCounter("count4", 67);
                }
            });
        }, {
            threshold: 0.6
        });

        observer.observe(section);
    });

    function animateCounter(id, target, suffix = "") {
        const element = document.getElementById(id);
        if (!element) return;


        let startTime = null;
        const duration = 1500;

        function updateCounter(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            const value = Math.floor(progress * target);

            element.innerText = value + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.innerText = target + suffix;
            }
        }

        requestAnimationFrame(updateCounter);
    }
    // home counter

    // Tooltips
    // $('[data-bs-toggle="tooltip"]').tooltip();

    //Owl-Carousel - Home hero card
    var owl = $('.service-card-prb');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });
    // services cards
    var owl = $('.services-card-rows');
    owl.owlCarousel({
        items: 9,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 45,
        nav: false,
        dots: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true,
        smartSpeed: 6000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1,

            },
            768: {
                items: 2,
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    var owl = $('.services-card');
    owl.owlCarousel({
        items: 9,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 45,
        nav: false,
        dots: true,
        autoplayTimeout: 9000,
        autoplayHoverPause: true,
        smartSpeed: 6000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel - Home testimonial
    var owl = $('.testimonial-card-a');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel - Reviews bages home
    var owl = $('.hero-bages-slider');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        nav: false,
        dots: false,
        autoHeight: true,
        margin: 13,
        responsive: {
            0: {
                items: 3
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1400: {
                items: 3
            }
        }
    });
    //Owl-Carousel - Reviews bages about
    var owl = $('.about-bages-slider');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        nav: false,
        dots: false,
        autoHeight: true,
        margin: 13,
        responsive: {
            0: {
                items: 3
            },
            768: {
                items: 3
            },
            1024: {
                items: 3
            },
            1400: {
                items: 3
            }
        }
    });
    //Owl-Carousel - Home banner
    var owl = $('.banner-slider');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel - services pages banner

    var owl = $('.service-banner-slider');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel - Reviews testimonial
    var owl = $('.reviews-slider');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        autoHeight: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });

    //Owl-Carousel - video testimonial
    var owl = $('.video-testimonials');
    owl.owlCarousel({
        items: 2,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3500,
        smartSpeed: 1500,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 2
            },
            1400: {
                items: 2
            }
        }
    });

    //Owl-Carousel - case-study
    var owl = $('.project-screens');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel -portfolio slide 
    var owl = $('.porto-slide');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: true,
        stagePadding: 50,
        autoplayTimeout: 350000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            520: {
                items: 1,
                stagePadding: 0
            },
            768: {
                items: 1,
                stagePadding: 0
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel -single slide
    var owl = $('.single-slide');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: true,
        stagePadding: 100,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            520: {
                items: 1,
                stagePadding: 0
            },
            768: {
                items: 1,
                stagePadding: 0
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel - app page bages-slider
    var owl = $('.bages-slider');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 2
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel - app page bages-slider
    var owl = $('.logo-weworkfor');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplayTimeout: 1800,
        autoplayHoverPause: false,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 3
            },
            520: {
                items: 3
            },
            768: {
                items: 4
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            },
            1600: {
                items: 6
            },
        }
    });

    //  //Owl-Carousel - Home testimonial
    var owl = $('.testimonial-card-b');
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
        dotsContainer: "#testimonials-avatar",
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            },
            1400: {
                items: 1
            }
        }
    });


    //full card portfolio
    var owl = $('.zoomowl');
    owl.owlCarousel({
        stagePadding: 200,
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 60
            },
            600: {
                items: 1,
                stagePadding: 100
            },
            1000: {
                items: 1,
                stagePadding: 200
            },
            1200: {
                items: 1,
                stagePadding: 250
            },
            1400: {
                items: 1,
                stagePadding: 300
            },
            1600: {
                items: 1,
                stagePadding: 350
            },
            1800: {
                items: 1,
                stagePadding: 400
            }
        }
    });

    //Owl-Carousel - app page case-slider
    var owl = $('.case-slider');
    owl.owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });
  $('.gif-slider').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 800,
    center: true,

    responsive: {
        0: {
            items: 1,
            center: false
        },
        576: {
            items: 2
        },
        992: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});
    //Owl-Carousel - awards-slider
    $('.awards-slider').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 25,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            },
            1600: {
                items: 4
            },
        }
    });

    //Owl-Carousel - pilot-slider
    $('.pilot-slider').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            },
            1400: {
                items: 4
            },
            1600: {
                items: 4
            },
        }
    });

    $('.testimonial-slider').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            },
            1400: {
                items: 4
            },
            1600: {
                items: 4
            },
        }
    });

    $('.services-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 15,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    $('.servies-slider').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 10,
        nav: false,
        dots: true,
        navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel - tech-slider1
    $('.tech-slider1').owlCarousel({
        items: 3,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 4000,
        responsive: {
            0: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 4
            },
            1200: {
                items: 5
            },
            1400: {
                items: 5
            },
            1600: {
                items: 5
            },
        }
    });

    //Owl-Carousel - tech-slider2
    $('.tech-slider2').owlCarousel({
        items: 3,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 4000,
        responsive: {
            0: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel - partners-slider
    $('.partners-slider').owlCarousel({
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 25,
        nav: false,
        dots: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsiveClass: true,
        rewind: true,
        responsive: {
            0: {
                items: 2
            },
            520: {
                items: 2
            },
            768: {
                items: 4
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            },
            1600: {
                items: 5
            },
        }
    });

    $(function () {
        var owl = $('.solutions-carousel');
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            nav: true,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
            items: 1,
            animateOut: 'fadeOut',
            mouseDrag: false,
            loop: false,
            onInitialized: counter, //When the plugin has initialized.
            onTranslated: counter //When the translation of the stage has finished.
        });

        function counter(event) {
            var element = event.target;         // DOM element, in this example .owl-carousel
            var items = event.item.count;     // Number of items
            var item = event.item.index + 1;     // Position of the current item

            // it loop is true then reset counter from 1
            if (item > items) {
                item = item - items
            }
            // $('#counter').html("item "+item+" of "+items)
            $('#counter').html("<span>" + item + " </span> " + "<span>" + items + "</span>");
        }
    });

    //Counter Up	
    $(".counter").counterUp({
        delay: 10,
        time: 2500,
    });

    //Scroll to top
    $.scrollUp({
        animation: 'fade',
        scrollImg: {
            active: true,
            type: 'background'
        }
    });

    //Portfolio Filter		
    $('.card-list').imagesLoaded(function () {
        // init Isotope
        var $grid = $('.card-list').isotope({
            itemSelector: '.single-card-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-sizer'
            }
        });
        // filter items on button click
        $('.filter-menu').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
    });
    //for menu active class
    $('.filter-menu li').on('click', function (event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });

    // background image
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })

    //end of page
})(jQuery);


$(document).on('click', '#headingtab a', function (e) {
    otherTabs = $(this).attr('data-bs-secondary').split(',');
    for (i = 0; i < otherTabs.length; i++) {
        nav = $('<ul class="nav d-none" id="tmpNav"></ul>');
        nav.append('<li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="' + otherTabs[i] + '">nav</a></li>"');
        nav.find('a').tab('show');
    }
});

var swiper = new Swiper(".services", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true
    },
    spaceBetween: 60,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },
    breakpoints: {
        640: {
            slidesPerView: 1.25,
            spaceBetween: 20
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const text = this.previousElementSibling;
            if (text.classList.contains('expanded')) {
                text.classList.remove('expanded');
                this.textContent = 'View More';
            } else {
                text.classList.add('expanded');
                this.textContent = 'View Less';
            }
        });
    });
});


//>> Project Hover Js Start <<//
const getSlide = $('.main-box, .box').length - 1;
const slideCal = 100 / getSlide + '%';

$('.box').css({
    "width": slideCal
});

$('.box').hover(function () {
    $('.box').removeClass('active');
    $(this).addClass('active');
});


// demo

function openTab(tabId, btn) {

    let tabs = document.getElementsByClassName("tabs");
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }

    let buttons = document.getElementsByClassName("tabBtn");
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
    }

    document.getElementById(tabId).style.display = "block";
    btn.classList.add("active");
}

document.getElementById("tab1").style.display = "block";


//   click video to play sound digital marketing 
// Load YouTube API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
document.getElementsByTagName('script')[0].parentNode.insertBefore(tag, null);

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '540',
        width: '360',
        videoId: 'djZV4wG8j_c', // Updated ID
        playerVars: {
            autoplay: 1,
            mute: 1,
            loop: 1,
            playlist: 'djZV4wG8j_c', // Updated playlist
            controls: 0,
            rel: 0,
            modestbranding: 1,
            playsinline: 1
        }
    });
}

// CLICK → Unmute video
document.getElementById('overlay').addEventListener('click', function () {
    if (player && player.unMute) {
        player.unMute();
        this.style.display = 'none';
    }
});


// Digital Marketing
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('#dmPortfolioCarousel');
    const bsCarousel = new bootstrap.Carousel(carousel);
    let startX = 0;
    let endX = 0;

    // Touch (mobile)
    carousel.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    carousel.addEventListener('touchend', e => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    // Mouse (desktop)
    carousel.addEventListener('mousedown', e => startX = e.clientX);
    carousel.addEventListener('mouseup', e => {
        endX = e.clientX;
        handleSwipe();
    });

    function handleSwipe() {
        if (Math.abs(startX - endX) < 50) return;
        if (endX < startX) bsCarousel.next();
        else bsCarousel.prev();
    }
});
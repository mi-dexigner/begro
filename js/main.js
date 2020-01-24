(function($) {
    "use strict";
    let mediaTablete = window.matchMedia("(max-width: 768px)");

    $('[href="#"]:not(.dropdown-toggle)').attr("href", "javascript:;");
    
    $(window).on('load', function() {
        $("#mi-loader").delay(1000).fadeOut("slow", function() {
            $("#mi-loader").remove();
        });
    });

    $('a').click(function(e){
        e.preventDefault();
        var goTo = this.getAttribute("href");
        $("#mi-loader").fadeIn("slow");
        setTimeout(function(){
            window.location = goTo;
        },900);
    });

    /* navbar toggler */
    $('.navbar-toggler').on('click',function(){
        var that = $(this);
        that.toggleClass('is-active');
        
        
    })
    // meanmenu
    /*$('#mobile-menu').meanmenu({
    	meanMenuContainer: '.mobile-menu',
    	meanScreenWidth: "992"
    });*/
    // custom scrollbar
    // 
    $("body").niceScroll({
        styler: "fb",
        cursorcolor: "#4886ff", // change cursor color in hex
        cursorwidth: "8px", // cursor width in pixel (you can also write "5px")
        cursorborderradius: "0px", // border radius in pixel for cursor 
        background: '#7f7f7f', // change css for rail background
        cursorborder: '', // css definition for cursor border : 1px solid #fff
        autohidemode: false, // how hide the scrollbar works, possible values: 
        smoothscroll: true, // scroll with ease movement
    });

    // One Page Nav
    var top_offset = $('.site-header').height() - 10;
    $('.navbar-nav').onePageNav({
        currentClass: 'active',
        scrollOffset: top_offset,
    });


    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-sticky").removeClass("sticky");
        } else {
            $(".header-sticky").addClass("sticky");
        }
    });

    // full screen menu toggle with tween max
    var t1 = new TimelineMax({ paused: true });

    t1.to(".one", 0.8, {
        y: 6,
        rotation: 45,
        ease: Expo.easeInOut
    });
    t1.to(".two", 0.8, {
        y: -6,
        rotation: -45,
        ease: Expo.easeInOut,
        delay: -0.8
    });
    t1.to(".three", 0.8, {
        opacity: 0,
        ease: Expo.easeInOut,
        delay: -0.8
    });

    t1.to(".full-screen-menu ", 2, {
        top: "0%",
        ease: Expo.easeInOut,
        delay: -2
    });

    t1.staggerFrom(".full-screen-menu  ul li", 2, { x: -200, opacity: 0, ease: Expo.easeOut }, 0.3);

    t1.reverse();
    $(document).on("click", ".toggle-btn", function() {
        t1.reversed(!t1.reversed());
    });

    // mainSlider
    function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: false,
            autoplaySpeed: 10000,
            dots: false,
            fade: true,
            arrows: false,
            responsive: [
                { breakpoint: 767, settings: { dots: false, arrows: false } }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    //mainSlider();


    // owlCarousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            },
            992: {
                items: 5
            }
        }
    })
    var mySwiper = new Swiper('.testimonials-slider', {
        //wrapperClass: 'kc-col-inner-container',
        //slideClass: 'kc-testi-layout-2',
        // Optional parameters
        direction: 'horizontal', //vertical
        loop: false,
        //speed:200,
        slidesPerView: 1,
        slidesPerColumn: 1,
        effect: "slide", //"slide", "fade", "cube", "coverflow" or "flip"
        spaceBetween: 40,
        autoplay: {
            delay: 1000,
        },
        // pagination: {
        // 		el: '.swiper-pagination',
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
            }
        }
    });

    function getUrlVars() {
        var vars = [],
            hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    /*$(window).bind('mousewheel DOMMouseScroll', function (event) {
    	if (event.ctrlKey == true) {
    			 event.preventDefault();
    	}
    })
    $(document).keydown(function(event) {
    	if (event.ctrlKey==true && (event.which == '187'  || event.which == '189' ) ) {
    	 event.preventDefault();
    	 }
    });*/
    /* magnificPopup img view */
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /* magnificPopup video view */
    $('.popup-video').magnificPopup({
        type: 'iframe'
    });


    // isotop
    $('.grid').imagesLoaded(function() {
        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });
    });

    // filter items on button click
    $('.portfolio-menu').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    //for menu active class
    $('.portfolio-menu button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });

    // scrollToTop

    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    // WOW active
    new WOW().init();

    $('.wrapper').imagesLoaded()
        .always(function(instance) {
            //console.log('all images loaded');
        })
        .done(function(instance) {
            //console.log('all images successfully loaded');
        })
        .fail(function() {
            // console.log('all images loaded, at least one is broken');
        })
        .progress(function(instance, image) {
            var result = image.isLoaded ? 'loaded' : 'broken';
            //console.log( 'image is ' + result + ' for ' + image.img.src );
        });

    function imgSet() {
        $('[data-imgurl]').each(function() {
            var $this = $(this),
                ele = $this.attr('src'),
                attData = $this.data('imgurl');

            if (ele !== undefined) {
                $this.attr('src', attData);
            } else {
                $this.css({
                    "background-image": 'url(' + attData + ')'
                });
            }
           $this.removeAttr('data-imgurl','');
        });
    }

    function get_timer() {
        $('[data-year]').each(function() {
            var $this = $(this),
                yearData = $this.data('year'),
                monthData = $this.data('month'),
                dayData = $this.data('day');
            //console.log(monthData +" "+dayData+', '+yearData+' 00:00:00' )	;
            $('#timer').timezz({
                'date': monthData + " " + dayData + ', ' + yearData + ' 00:00:00',
                'days': 'Days',
                'hours': 'Hrs',
                'minutes': 'Min',
                'seconds': 'Sec'
            });
        });
    }
    get_timer();
    imgSet();
    imgHoverSet();

    function imgHoverSet() {
        $('[data-imgurl-hover]').each(function() {
            var $this = $(this),
                attData = $this.data('imgurl-hover'),
                attDatas = $this.data('imgurl');
            $this.hover(
                function() {
                    $this.css({
                        "background-image": 'url(' + attData + ')'
                    });
                },
                function() {
                    $this.css({
                        "background-image": 'url(' + attDatas + ')'
                    });
                }
            );

        });
    }

    /* post format gallery */
    $(document).on('click', '.mi-carousel-thumb', function() {
        var id = $("#" + $(this).attr("id"));
        $(id).on('.slide.carousel', function() {
            sunset_get_bs_thumbs(id);
        });
    });

    $(document).on('mouseenter', '.mi-carousel-thumb', function() {
        var id = $("#" + $(this).attr("id"));
        sunset_get_bs_thumbs(id);
    });

    function sunset_get_bs_thumbs(id) {

        var nextThumb = $(id).find(".carousel-item.active").find(".next-image-preview").data("image");
        var prevThumb = $(id).find(".carousel-item.active").find(".prev-image-preview").data("image");
        $(id).find(".carousel-control-next").find(".thumbnail-container").css({ "background-image": "url(" + nextThumb + ")" });
        $(id).find(".carousel-control-pre").find(".thumbnail-container").css({ "background-image": "url(" + prevThumb + ")" });

    }
    /* Ajax Function loader start*/
    revealPosts();
    $(document).on('click', '.mi-load-more:not(.loading)', function() {
        var that = $(this);
        var page = $(this).data('page');
        var newPage = page + 1;
        var ajaxurl = that.data('url');
        that.addClass('loading').find('.text').slideUp(320);
        that.find('.icofont-spinner').addClass('spin');
        $.ajax({
            url: ajaxurl,
            type: "post",
            data: {
                page: page,
                action: 'mi_load_more'
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                setTimeout(function() {
                    that.data('page', newPage);
                    $('.mi-posts-container').append(response);

                    that.removeClass('loading').find('.text').slideDown(320);
                    that.find('.icofont-spinner').removeClass('spin');
                    revealPosts();
                }, 2000);
            }

        });


    });
    //  helper function
    function revealPosts() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        var posts = $('article:not(.reveal)');
        var i = 0;

        setInterval(function() {

            if (i >= posts.length) return false;

            var el = posts[i];
            $(el).addClass('reveal').find('.mi-carousel-thumb').carousel();

            i++

        }, 100);
    }
    /* Ajax Function loader end*/



    //console.log(url);

})(jQuery);
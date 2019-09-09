/**
 * 
 */

$(function() {
    "use strict";
	
	
    $(window).on("load", function() {
        // 1. preloader
        $("#preloader").fadeOut(600);
        $(".preloader-bg").delay(400).fadeOut(600);
		
        // 2. fadeIn.element
        setTimeout(function() {
            $(".fadeIn-element").delay(600).css({
                display: "none"
            }).fadeIn(800);
        }, 0);
        // 2-1. fadeIn.borders
        setTimeout(function() {
            $(".border-left").removeClass("left-position");
        }, 0);
        setTimeout(function() {
            $(".border-right").removeClass("right-position");
        }, 0);
        setTimeout(function() {
            $(".border-top").removeClass("top-position");
        }, 0);
        setTimeout(function() {
            $(".border-bottom").removeClass("bottom-position");
        }, 0);
    });
	
    // 3. page scroll
    $("a.page-scroll").on("click", function(e) {
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: $($anchor.attr("href")).offset().top
        }, 1500, 'easeInOutExpo');
        e.preventDefault();
    });
	
    // 4. navigation
    // 4-1. highlight navigation
    $("body").scrollspy({
        target: ".navbar",
        offset: 10
    });
    // 4-2. close mobile menu
    $(".navbar-collapse ul li a").on("click", function() {
        $(".navbar-toggle:visible").click();
    });
    // 4-3. collapse navigation
    $(window).on("scroll", function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-bg-switch").addClass("main-navigation-bg");
            $(".navbar-bg-switch-bordered").addClass("main-navigation-bg-bordered");
        } else {
            $(".navbar-bg-switch").removeClass("main-navigation-bg");
            $(".navbar-bg-switch-bordered").removeClass("main-navigation-bg-bordered");
        }
		
        // 5. to top arrow animation
        if ($(this).scrollTop() > 400) {
            $(".to-top-arrow").addClass("show");
        } else {
            $(".to-top-arrow").removeClass("show");
        }
		
        // 6. IMG navigation icon color switch
        if ($(this).scrollTop() > 600) {
            $("#img-navigation-icon span").addClass("navigation-dark");
        } else {
            $("#img-navigation-icon span").removeClass("navigation-dark");
        }
    });
});

/**
 * bloom's
 */
//   all ------------------
function initBloom() {
    "use strict";
    $(".loader").fadeOut(500, function() {
        $("#main").animate({
            opacity: "1"
        }, 500);
        contanimshow();
    });
    var bgImage = $(".bg");
    bgImage.each(function(a) {
        if ($(this).attr("data-bg")) $(this).css("background-image", "url(" + $(this).data("bg") + ")");
    });
	function afh() {
		$(".fullscreen-slider .item").css({
			height: $(".fullscreen-slider").outerHeight(true)
		});
		$(".fullheight-carousel .item").css({
			height: $(".fullheight-carousel-holder").outerHeight(true)
		});
		$(".slideshow-slider .item").css({
			height: $(".slideshow-slider").outerHeight(true)
		});
		$(".full-screen-gallery .horizontal_item").css({
			height: $(".full-screen-gallery").outerHeight(true)
		});
		$(".slider-image-holder .item").css({
			height: $(".slider-image-holder").outerHeight(true)
		});
		$(".alt").each(function() {
			$(this).css({
				"margin-top": -1 * $(this).outerHeight()/2
			});
		});
 	$(".contact-form-wrap").css({
		 'position' : 'absolute',
        'top' : '50%',
        'margin-top' : -$(".contact-form-wrap").height()/2
	});
		$(".blog-nav  .art-nav-img  img").css({
			"margin-left": -$(".blog-nav  .art-nav-img  img").width() / 2 + "px"
		});
		var a = $(window).height(), b = $(".resize-carousel-holder").outerHeight(), c = $(".p_horizontal_wrap"), d = $(".fixed-filter").outerHeight();
		c.css("height", b - d);
		var e = $(window).width();
		if (e < 768) c.css("height", a - b - 60);
		$(" #portfolio_horizontal_container.onecolumn .portfolio_item img").css({
			height: $(".portfolio_item").outerHeight(true)
		});
		$(" #portfolio_horizontal_container.two-ver-columns .portfolio_item img  ").css({
			height: $(".portfolio_item").outerHeight(true) - 5 + "px"
		});
	}
	afh();
//  menu ------------------

    var cm = $(".nav-button"),
      	nh = $(".nav-inner"),
    	no = $(".nav-overlay"),
		hidmen = $('#hid-men');
 	hidmen.css({
		 'position' : 'absolute',
        'top' : '50%',
        'margin-top' : -hidmen.height()/2
	});
 	hidmen.menu();
    function showmenu() {
        setTimeout(function() {
            nh.addClass("vismen");
        }, 120);
        cm.addClass("cmenu");
        nh.removeClass("isDown");
        no.addClass("visover");
    }
    function hidemenu() {
        nh.addClass("isDown");
        cm.removeClass("cmenu");
        nh.removeClass("vismen");
        no.removeClass("visover");
    }
    cm.on("click", function() {
		if (nh.hasClass("isDown")) {
			showmenu();
		}
		else {
		hidemenu();

		}
		return false;
    });
    no.on("click", function() {
        hidemenu();
		return false;
    });
	cm.attr("onclick","return true");

//   Owl Carousel ------------------

	var sync2 = $(".fullscreen-slider");
    sync2.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
		thumbs: false,
        onInitialized: function() {
 			$(".num-holder3").text("1" + " / " + this.items().length);
            }
        }).on("changed.owl.carousel", function(a) {
        var b = --a.item.index, a = a.item.count;
        $(".num-holder3").text((1 > b ? b  + a : b > a ? b - a : b  )  + " / " + a);
    });
    $(".fullscreen-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".fullscreen-slider-holder").find(sync2).trigger("next.owl.carousel");
		$(this).closest(".fullscreen-slider-holder").find(gf).trigger("next.owl.carousel");
        return false;
    });
    $(".fullscreen-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".fullscreen-slider-holder").find(sync2).trigger("prev.owl.carousel");
		$(this).closest(".fullscreen-slider-holder").find(gf).trigger("prev.owl.carousel");
        return false;
    });

    var gR = $(".gallery_horizontal"), w = $(window), cf = $(".gallery_horizontal").data("cen") , lgg =$(".gallery_horizontal").data("loops") ;
    function initGalleryhorizontal() {
        var  c = $(".gallery_horizontal"), d = $(".bvp").outerHeight() , ch = $(".gallery_horizontal").outerHeight();
	        c.find("img").css({
            height: ch - d
        });

        if (gR.find(".owl-stage-outer").length) {
            gR.trigger("destroy.owl.carousel");
            gR.find(".horizontal_item").unwrap();
        }
        if (w.width() > 756) gR.owlCarousel({
            autoWidth: true,
            margin: 20,
            items: 1,
            smartSpeed: 1300,
            loop: lgg,
            center: cf,
            nav: false,
			 responsive: false,
            thumbs: true,
            thumbImage: true,
            thumbContainerClass: "owl-thumbs",
            thumbItemClass: "owl-thumb-item",
            onInitialized: function() {

				  $(".num-holder2").text("1" + " of " + this.items().length);
            }
        }).on("changed.owl.carousel", function(a) {
        var b = --a.item.index-1, a = a.item.count;
        $(".num-holder2").text((1 > b ? b  + a : b > a ? b - a : b  )  + " of " + a);
    });

    }
    if (gR.length) {
        initGalleryhorizontal();
        w.on("resize.destroyhorizontal", function() {
	           setTimeout(initGalleryhorizontal, 150);
        });
    }
    $(".resize-carousel-holder a.next-slide").on("click", function() {
        $(this).closest(".resize-carousel-holder").find(gR).trigger("next.owl.carousel");

		return false;
    });
    $(".resize-carousel-holder a.prev-slide").on("click", function() {
        $(this).closest(".resize-carousel-holder").find(gR).trigger("prev.owl.carousel");

		return false;
    });
	$('.ad-thumbs .bg').each(function () {
		var daim = $(this).data("bg");
		$(this).append("<img>");
		$(this).find("img").attr('src',daim);

	});
	var totalItems = $('.hero-wrap-image-slider .owl-item').length;
	$('.totnaum').html(totalItems);
    var gf = $(".full-screen-gallery") ;
        gf.owlCarousel({
            margin: 0,
            items: 1,
            smartSpeed: 1300,
            nav: false,
            thumbs: true,
            thumbImage: true,
            thumbContainerClass: "owl-thumbs",
            thumbItemClass: "owl-thumb-item",
			onInitialized: function() {
				  $(".num-holder2").text("1" + " / " + this.items().length);
            }
        }) ;
       gf.on("translated.owl.carousel", function(a) {
		var   a = a.item.count;
		var b = $(".full-screen-gallery .owl-item.active" ).index() + 1 ;
        $(".num-holder2").text((b) + " / " + a);
    });
	var ss = $(".single-slider"), dlt2 = ss.data("loppsli");
    ss.owlCarousel({
        margin: 0,
        items: 1,
        smartSpeed: 1300,
        loop: dlt2,
        nav: false,
        autoHeight: false
    });
    $(".single-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".single-slider-holder").find(ss).trigger("next.owl.carousel");
		return false;
    });
    $(".single-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".single-slider-holder").find(ss).trigger("prev.owl.carousel");
		return false;
    });

	var fhcr = $(".fullheight-carousel");
    fhcr.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 3,
        dots: false,
        center: true,
        autoHeight: false,
        smartSpeed: 1500,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            764: {
                items: 3
            }
        }
    });
    $(".fullheight-carousel-holder a.next-slide").on("click", function() {
        $(".fullheight-carousel-holder").find(fhcr).trigger("next.owl.carousel");
        return false;
    });
    $(".fullheight-carousel-holder a.prev-slide").on("click", function() {
        $(".fullheight-carousel-holder").find(fhcr).trigger("prev.owl.carousel");
        return false;
    });
		var sync4 = $(".slideshow-slider");
    sync4.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
		mouseDrag:false,
		touchDrag:false,
		autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        autoplaySpeed: 3600,
        items: 1,
        dots: false,
		animateOut: "fadeOut",
        animateIn: "fadeIn",
        autoHeight: false,

    });




if (navigator.appVersion.indexOf("Win")!=-1) {


	var timestamp_mousewheel = 0,
		mwcon = $(".mousecontr");
	mwcon.on("mousewheel", ".owl-stage", function(a) {
		var d = new Date();
		if((d.getTime() - timestamp_mousewheel) > 1200){
			timestamp_mousewheel = d.getTime();
			if (a.deltaY > 0){ mwcon.trigger("prev.owl");} else {mwcon.trigger("next.owl");}
			a.preventDefault();
		}
	});

            }

//   Skills ------------------

	$("div.skillbar-bg").each(function() {
		$(this).find(".custom-skillbar").delay(600).animate({
			width: $(this).attr("data-percent")
        }, 1500);
    });

//   Thumbnails ------------------

    function showThumbs() {
        $(".show-thumbs").removeClass("vis-t");
        $(".owl-thumbs").addClass("vis-thumbs");
		$(".resize-carousel-holder , .buttons-holder").addClass("ogm");
        setTimeout(function() {
            $(".owl-thumb-item").addClass("himask");
        }, 650);

    }
    function hideThumbs() {
        $(".show-thumbs").addClass("vis-t");
        $(".owl-thumbs").removeClass("vis-thumbs");
        $(".owl-thumb-item").removeClass("himask");
		$(".resize-carousel-holder , .buttons-holder").removeClass("ogm");
    }
    $(".show-thumbs").on("click", function() {
        if ($(this).hasClass("vis-t")) showThumbs(); else hideThumbs();
		return false;
    });
    $(document).on("click", ".owl-thumb-item", function() {
        hideThumbs();
		return false;
    });

//   Info ------------------

	var inwrap = $(".info-wrap"), inover = $(".info-overlay");
	function showinfo() {
		inwrap.addClass("visinwrap");
		inover.addClass("visinover");
	}
	function hideinfo() {
		inwrap.removeClass("visinwrap");
		inover.removeClass("visinover");
	}
	$(".close-info , .info-overlay").on("click", function() {
		hideinfo();
	});
	$(".show-info").on("click", function() {
		showinfo();
	});

//   contact-form------------------

	var cfh = $(".contact-form-holder"), cghw = $("#contact-form");
	function showcontact() {
		cfh.addClass("visconbg");
		cghw.addClass("visconform");
	}
	function hidecontact() {
		cfh.removeClass("visconbg");
		cghw.removeClass("visconform");
	}
	$(".close-contact").on("click", function() {
		hidecontact();
	});
	$(".show-form").on("click", function(a) {
		a.preventDefault();
		showcontact();
	});
    $("#contactform").submit(function() {
        var a = $(this).attr("action");
        $("#message").slideUp(750, function() {
            $("#message").hide();
            $("#submit").attr("disabled", "disabled");
            $.post(a, {
                name: $("#name").val(),
                email: $("#email").val(),
                comments: $("#comments").val()
            }, function(a) {
                document.getElementById("message").innerHTML = a;
                $("#message").slideDown("slow");
                $("#submit").removeAttr("disabled");
                if (null != a.match("success")) $("#contactform").slideDown("slow");
            });
        });
        return false;
    });
    $("#contactform input, #contactform textarea").keyup(function() {
        $("#message").slideUp(1500);
    });

// Services hover ------------------

	$(".serv-item").on({
		mouseenter: function () {
			var a = $(this).data("bgscr");
			$(".bg-ser").css("background-image", "url(" + a + ")");
		}
	});

// Background video ------------------

    var l = $(".background-youtube").data("vid");
    var m = $(".background-youtube").data("mv");
    $(".background-youtube").YTPlayer({
        fitToBackground: true,
        videoId: l,
        pauseOnScroll: true,
        mute: m,
        callback: function() {
            var a = $(".background-video").data("ytPlayer").player;
        }
    });
    var vid = $(".background-vimeo").data("vim");
    $(".background-vimeo").append('<iframe src="//player.vimeo.com/video/' + vid + '?background=1"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>');
    $(".video-holder").height($(".media-container").height());
    if ($(window).width() > 1024) {
        if ($(".video-holder").size() > 0) if ($(".media-container").height() / 9 * 16 > $(".media-container").width()) {
            $(".background-vimeo iframe ").height($(".media-container").height()).width($(".media-container").height() / 9 * 16);
            $(".background-vimeo iframe ").css({
                "margin-left": -1 * $("iframe").width() / 2 + "px",
                top: "-75px",
                "margin-top": "0px"
            });
        } else {

            $(".background-vimeo iframe ").width($(window).width()).height($(window).width() / 16 * 9);
            $(".background-vimeo iframe ").css({
                "margin-left": -1 * $("iframe").width() / 2 + "px",
                "margin-top": -1 * $("iframe").height() / 2 + "px",
                top: "50%"
            });
        }
    } else if ($(window).width() < 760) {
        $(".video-holder").height($(".media-container").height());
        $(".background-vimeo iframe ").height($(".media-container").height());
    } else {
        $(".video-holder").height($(".media-container").height());
        $(".background-vimeo iframe ").height($(".media-container").height());
    }

// Isotope ------------------

    function n() {
        if ($(".gallery-items").length) {
            var a = $(".gallery-items").isotope({
                singleMode: true,
                columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                transformsEnabled: true,
                transitionDuration: "700ms",
                resizable: true
            });
            a.imagesLoaded(function() {
                a.isotope("layout");
            });
            $(".gallery-filters").on("click", "a.gallery-filter", function(b) {
                b.preventDefault();
                var c = $(this).attr("data-filter");
                a.isotope({
                    filter: c
                });
                $(".gallery-filters a.gallery-filter").removeClass("gallery-filter-active");
                $(this).addClass("gallery-filter-active");
                return false;
            });

        }
		var curColor = $(".p_horizontal_wrap").data("csc");
        var c = {
            touchbehavior: true,
            cursoropacitymax: 1,
            cursorborderradius: "6px",
            background: "transparent",
            cursorwidth: "5px",
            cursorborder: "0px",
            cursorcolor: curColor,
            autohidemode:false,
            bouncescroll: true,
            scrollspeed: 120,
            mousescrollstep: 90,
            grabcursorenabled: false,
            horizrailenabled: true,
            preservenativescrolling: true,
            cursordragontouch: true,
            railpadding: {
                top: 33,
                right: 0,
                left:  0,
                bottom: 0
            }
        };
        $(".p_horizontal_wrap").niceScroll(c);
        var d = $("#portfolio_horizontal_container");
        d.imagesLoaded(function(a, b, e) {
            var f = {
                itemSelector: ".portfolio_item",
                layoutMode: "packery",
                packery: {
                    isHorizontal: true,
                    gutter: 0
                },
                resizable: true,
                transformsEnabled: true,
                transitionDuration: "1000ms",
            };
            var g = {
                itemSelector: ".portfolio_item",
                layoutMode: "packery",
                packery: {
                    isHorizontal: false,
                    gutter: 0
                },
                resizable: true,
                transformsEnabled: true,
                transitionDuration: "700ms"
            };
            if ($(window).width() < 756) {
                d.isotope(g);
                d.isotope("layout");
                if ($(".p_horizontal_wrap").getNiceScroll()) $(".p_horizontal_wrap").getNiceScroll().remove();

            } else {
                d.isotope(f);
                d.isotope("layout");
                $(".p_horizontal_wrap").niceScroll(c);
            }
            $(".gallery-filters").on("click", "a", function(a) {
                a.preventDefault();
                var b = $(this).attr("data-filter");
                d.isotope({
                    filter: b
                });
                $(".gallery-filters a").removeClass("gallery-filter-active");
                $(this).addClass("gallery-filter-active");
            });

        });
    }
    n();
    $(window).on("load", function() {
        n();
    });

// page animations------------------

	var headanim = $("header"), footanim = $("footer"), conhold = $(".content-holder");
	function hideheader() {
		headanim.animate({
			top: "-65px"
		}, 200);
	}
	function showheader() {
		headanim.animate({
			top: "0"
		}, 200);
	}
	function hidefooter() {
		footanim.animate({
			bottom: "-55px"
		}, 500);
	}
	function showfooter() {
		footanim.animate({
			bottom: "0"
		}, 500);
	}
	if (conhold.hasClass("nopad")) hidefooter(); else showfooter();
	if (conhold.hasClass("fl-con-wrap")) hideheader(); else showheader();
	if (conhold.hasClass("no-vis-footer")) hidefooter();
	var $window = $(window);
	$window.on('resize', function(){
		afh();
		if ($(".resize-carousel-holder").hasClass("res-protoc")) if ($(window).width() > 756) location.reload();
	});
    $window.on("scroll", function(a) {
        if ($(this).scrollTop() > 150) {

            $(".to-top").fadeIn(500);
        } else {

            $(".to-top").fadeOut(500);
        }
    });
    $('<a class="to-top"><i class="fa fa-long-arrow-up"></i></a>').appendTo(".column-wrap");
    $(".to-top").on("click", function(a) {
        a.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

//   LightGallery ------------------

    $(".single-popup-image").lightGallery({
        selector: "this",
        cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
        download: false,
        counter: false
    });
    var $lg = $(".lightgallery"), dlt = $lg.data("looped");
    $lg.lightGallery({
        selector: ".lightgallery a.popup-image",
        cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",
        download: false,
        loop: dlt,

    });
    $lg.on("onBeforeNextSlide.lg", function(a) {
        gR.trigger("next.owl.carousel");
 		gf.trigger("next.owl.carousel");
    });
    $lg.on("onBeforePrevSlide.lg", function(a) {
        gR.trigger("prev.owl.carousel");
 		gf.trigger("prev.owl.carousel");
    });

//   Share ------------------
    $(".share-container").share({
        networks: ['facebook','pinterest','googleplus','twitter','linkedin']
    });
}
function contanimhide() {
    setTimeout(function() {
        $(".content-holder").addClass("scale-bg2");
    }, 650);
}
function  contanimshow() {
     setTimeout(function() {
    	$(".content-holder").removeClass("scale-bg2");
    }, 450);
}
$('<div class="inf-mob-btn"><span>Info</span><i class="fa fa-chevron-down"></i></div>').appendTo(".header-info");
$(".inf-mob-btn").on("click", function() {
	$(".header-info ul").slideToggle();
	return false;
});

//=============== init ajax  ==============

$(function() {
    $.coretemp({
        reloadbox: "#wrapper",
		loadErrorMessage: "<h2>404</h2> <br> Page you are looking for - Not found", // 404 error text
        loadErrorBacklinkText: "Back to the last page", // 404 back button  text
        outDuration: 250,
        inDuration: 150
    });
    readyFunctions();
    $(document).on({
        ksctbCallback: function() {
            readyFunctions();
        }
    });
});
//=============== init all functions  ==============
function readyFunctions() {
     initBloom();
}
//=============== Contact Form Validation ==============
    $(document).ready(function() {
        $('.name_warning').hide();
        $('.email_warning').hide();
        $('.phone_warning').hide();
        $('.type_warning').hide();
        $('.service_warning').hide();
        $('.date_warning').hide();
        $('.location_warning').hide();
        $('.emailVal_warning').hide();
    });
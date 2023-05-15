var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});


(function ($) {
    "use strict";
    $(document).on("ready", function () {
        // SCROLL TO TOP
        var progressPath = document.querySelector(".progress-wrap path");
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        $(window).scroll(updateProgress);
        var offset = 50;
        var duration = 550;
        jQuery(window).on("scroll", function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery(".progress-wrap").addClass("active-progress");
            } else {
                jQuery(".progress-wrap").removeClass("active-progress");
            }
        });
        jQuery(".progress-wrap").on("click", function (event) {
            event.preventDefault();
            jQuery("html, body").animate({ scrollTop: 0 }, duration);
            return false;
        });

        // MOBILE MENU
        $("#hamburger").on("click", function () {
            $(".mobile-nav").addClass("show");
            $(".overlay").addClass("active");
        });
        $(".close-nav").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $(".overlay").removeClass("active");
        });
        $(".overlay").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $(".overlay").removeClass("active");
        });
        $("#mobile-menu").metisMenu();

        // HERO SLIDER
        $(".hero-slider-wrapper").slick({
            centerMode: true,
            centerPadding: "350px",
            slidesToShow: 1,
            arrows: true,
            inifity: true,
            prevArrow:
                '<button type="button" class="slick-prev"><span class="prev-icon"><i class="fas fa-long-arrow-left"></i></span>Prev</button>',
            nextArrow:
                '<button type="button" class="slick-next">Next<span class="next-icon"><i class="fas fa-long-arrow-right"></i></span></button>',
            responsive: [
                {
                    breakpoint: 1860,
                    settings: {
                        centerPadding: "260px",
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        centerPadding: "100px",
                    },
                },

                {
                    breakpoint: 768,
                    settings: {
                        centerMode: false,
                        arrows: false,
                        centerPadding: "100px",
                    },
                },
                {
                    breakpoint: 550,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: "0px",
                    },
                },
            ],
        });

        //    SEARCH BAR TOGGLE
        $(".header-search-icon").click(function () {
            $(".search-box").toggle("fast");
        });
    }); // end document ready function
})(jQuery); // End jQuery


var instance = $(".hs__wrapper");
$.each(instance, function (key, value) {
    var arrows = $(instance[key]).find(".arrow"),
        prevArrow = arrows.filter(".arrow-prev"),
        nextArrow = arrows.filter(".arrow-next"),
        box = $(instance[key]).find(".hs"),
        x = 0,
        mx = 0,
        maxScrollWidth =
            box[0].scrollWidth - box[0].clientWidth / 2 - box.width() / 2;

    $(arrows).on("click", function () {
        if ($(this).hasClass("arrow-next")) {
            x = box.width() / 2 + box.scrollLeft() - 10;
            box.animate({
                scrollLeft: x
            });
        } else {
            x = box.width() / 2 - box.scrollLeft() - 10;
            box.animate({
                scrollLeft: -x
            });
        }
    });

    $(box).on({
        mousemove: function (e) {
            var mx2 = e.pageX - this.offsetLeft;
            if (mx) this.scrollLeft = this.sx + mx - mx2;
        },
        mousedown: function (e) {
            this.sx = this.scrollLeft;
            mx = e.pageX - this.offsetLeft;
        },
        scroll: function () {
            toggleArrows();
        }
    });

    $(document).on("mouseup", function () {
        mx = 0;
    });

    function toggleArrows() {
        if (box.scrollLeft() > maxScrollWidth - 10) {
            nextArrow.addClass("disabled");
        } else if (box.scrollLeft() < 10) {
            prevArrow.addClass("disabled");
        } else {

            nextArrow.removeClass("disabled");
            prevArrow.removeClass("disabled");
        }
    }
});


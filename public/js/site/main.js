$(window).on("load", function() {
    

    let searchTerms = [
        {
            word: "home",
            page: "root",
            id: "home"
        }, {
            word: "about us",
            page: "root",
            id: "aboutus"
        }, {
            word: "our services",
            page: "root",
            id: "services"
        }, {
            word: "pricing",
            page: "root",
            id: "pricing"
        }, {
            word: "contact us",
            page: "root",
            id: "contact"
        }, {
            word: "nh program",
            page: "root",
            id: "program"
        }, {
            word: "Location",
            page: "root",
            id: "contact"
        }, {
            word: "testimonials",
            page: "root",
            id: "testimonials"
        }, {
            word: "nh pyramid",
            page: "root",
            id: "pyramid"
        }
    ]

    $(".search-input > input").on("input", function (e) {
        let term = $(this).val();
        term = term.toLowerCase();
        let searchObjects = searchTerms.filter(item => { return item.word.toLowerCase().includes(term); });

        $(".search-sugg").empty();
        if (searchObjects.length > 0) {
            searchObjects.forEach(object => {
                $(".search-sugg").append("<span class='search-object' data-id='" + object.id + "'>" + object.word + "</span");
            })
        } else {
            $(".search-sugg").append("<span class='search-object'>No Results Found!</span");
        }
    });

    $(".search-input > input").on("focus", function () {
        $(".search-bottom").css("height", "50vh");
        $(".search-bottom").css("padding", "3rem 7%");
    })

    $(".search-close-btn").on("click", function () {
            $(".search-bottom").css("height", "0");
            $(".search-bottom").css("padding", "0");
    });

    $(document).on("click", ".search-object", function () {
        let id = $(this).attr("data-id");
        let yPos = document.querySelector("#" + id).offsetTop;
        // console.log(yPos);
        $(window).scrollTop(yPos);
    });

    let params = new URLSearchParams(location.search);
    let page = params.get('page') ? params.get('page') : "home";
    $("."+page + "-link").addClass("active");
    
    let navBtn = document.querySelector(".navBtn");
    let header = document.querySelector(".header");
    navBtn.addEventListener("click", function(){
        header.classList.toggle("opened");
        document.body.classList.toggle("hidden-overflow");
    });
    
    let headerOneObvserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                $(".header2").addClass("sticky");
            } else {
                $(".header2").removeClass("sticky");
            }
        });
    }, {threshold: 0.0});
    
    let header1 = document.querySelector(".header1");

    let rootMargin = 0;

    if ($(window).width() >= 1236) {
        rootMargin = document.querySelector(".header2 > .desktop > .view").clientHeight - parseInt($("html").css("font-size")) * 3; // navbar shrinks by 1.5rem 
    } else if ($(window).width() >= 1024 && $(window).width() <= 1236) {
        rootMargin = document.querySelector(".header2 > .desktop > .view").clientHeight; // No shrinkage
    } else {
        rootMargin = document.querySelector(".header2 > .mobile > .view").clientHeight;
    }
    let rootNum = rootMargin;
    rootMargin = "-"+rootMargin+"px";
    // console.log(rootMargin)

    options = {
        // root: document.querySelector("."),
        rootMargin: rootMargin,
        threshold: 0.0
    }

    let footerObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (($(document).scrollTop() / $("body").height()) > .5) {
                if (entry.isIntersecting) {
                    $(".header2").removeClass("paused");
                    $(".header2").addClass("sticky");
                    // console.log("interacting at " + window.scrollY)
                    if ($(window).width() >= 1024) {
                        $(".header2 > .desktop").css("top", "0"); // No shrinkage
                    } else {
                        $(".header2 > .mobile > .view").css("top", "0");
                    }
                } else {
                    
                    $(".header2").addClass("paused");
                    $(".header2").removeClass("sticky");
                    // console.log("not interacting at " + window.scrollY)
                    if ($(window).width() >= 1024) {
                        let h1Height = document.querySelector(".header1").clientHeight;
                        $(".header2 > .desktop").css("top", window.scrollY - h1Height); // No shrinkage
                    } else {
                        $(".header2 > .mobile > .view").css("top", window.scrollY);
                    }
                }
            }
        });
    }, options);

    let footer1 = document.querySelector(".main");
    footerObserver.observe(footer1);

    // Smooth footer2 scrolling animation
    // let docFontSize = parseInt($("html").css("font-size"));
    // rootMargin = (docFontSize * 2) + "px";

    // let footer2Observer = new IntersectionObserver((entries, observer) => {
    //     entries.forEach((entry) => {
    //         if (entry.isIntersecting) {
    //             console.log("reached footer");
    //             let docEnd = window.scrollY + document.querySelector(".footer2").clientHeight + docFontSize * 2;
    //             $(document).animate({scrollTop : docEnd});
    //         }
    //     });
    // }, {rootMargin: rootMargin, threshold: 0.0});

    // let footer2 = document.querySelector(".footer2");
    // footer2Observer.observe(footer2);


    // Carousel Function, use with OTC CSS and JQuery

    function createOTCCarousel(widthPercentage = 0.8, carouselClass) {
        let windowWidth = $(window).width();
        let viewport = $("."+carouselClass).find(".carousel-viewport");
        console.log("createOTCCarousel: ", widthPercentage);
        viewport.width(windowWidth * widthPercentage);
        viewport.scrollLeft(0);
        viewport.each(function() {
            let childrenWidth = 0;
            $(this).children().each(function() {
                childrenWidth += $(this).width() + parseInt($("html").css("font-size"));
            });
            if (childrenWidth < viewport.width()) {
                $(this).css("justify-content", "center");
            } else {
                $(this).css("justify-content", "unset");
            }
        });

        function handleScroll(viewport, children, btn, direction) {
            if (direction === "left") {
                if (viewport.scrollLeft() < children.width()) {
                    btn.css("opacity", "0");
                    btn.css("pointer-events", "none");
                } else {
                    btn.css("opacity", "1");
                    btn.css("pointer-events", "initial");
                }
            } else if (direction === "right") {
                // if (viewport.scrollLeft() < children.width()) {
                //     btn.css("opacity", "0");
                //     btn.css("pointer-events", "none");
                // } else {
                //     btn.css("opacity", "1");
                //     btn.css("pointer-events", "initial");
                // }
            }
        }

        let leftBtnArr = $("."+carouselClass).find(".dir-arrow.right");
        leftBtnArr.on('click', function () {
            // let carousel = $(this).parent(".pan-ctn").siblings(".carousel-viewport");
            let carouselCell = viewport.children(".carousel-cell");

            viewport.scrollLeft(viewport.scrollLeft() + carouselCell.width());
            console.log("Cell Width : "+carouselCell.width());
            console.log("Scroll : " + viewport.scrollLeft());
            viewport.attr('data-scroll-left', viewport.scrollLeft());

            // handleScroll(viewport, carouselCell, $(this), "right")
        });

        let rightBtnArr = $("."+carouselClass).find(".dir-arrow.left");
        rightBtnArr.on('click', function () {
            // let carousel = $(this).parent(".pan-ctn").siblings(".carousel-viewport");
            // document.querySelectorAll("#portfolio .carousel-viewport .carousel-cell").forEach(elem => {console.log(elem.getBoundingClientRect())});
            let carouselCell = viewport.children(".carousel-cell");

            viewport.scrollLeft(viewport.scrollLeft() + (-1 * carouselCell.width()));

            console.log("Cell Width : "+carouselCell.width());
            console.log("Scroll : " + viewport.scrollLeft());
            viewport.attr('data-scroll-left', viewport.scrollLeft());

            // handleScroll(viewport, carouselCell, $(this), "left")
        });
    }
    // get mobile nav size
    let mobileNavCtnHeight = document.querySelector("#mobile-nav-ctn").clientHeight;

    //get desktop nav height
    let desktopNavCtnHeight = document.querySelector(".header2 > .desktop").clientHeight * .95;
    if ($(window).width() <=1023) {
        createOTCCarousel(.85, "news-carousel");

        $(".header2").css("height", mobileNavCtnHeight+"px");
        $(".mobile-nav").css("height", "calc(100vh - "+mobileNavCtnHeight+"px)");
        
        $(".dynamic-glow").addClass("glow-carousel-container");
        $(".dynamic-glow").removeClass("glow-block-container");

        $(".dynamic-grid").addClass("glow-carousel-container");
        $(".dynamic-grid").removeClass("grid-view");
            
        // Make carousel width 78% of client viewport width
        let windowWidth = $(window).width();
        let viewport = $(".carousel-viewport");
        $('.carousel-viewport').width(windowWidth * .8);
        $('.carousel-viewport').each(function() {
            let childrenWidth = 0;
            $(this).children().each(function() {
                childrenWidth += $(this).width() + parseInt($("html").css("font-size"));
            });
            if (childrenWidth < viewport.width()) {
                $(this).css("justify-content", "center");
            } else {
                $(this).css("justify-content", "unset");
            }
        });
    }else {
        createOTCCarousel(.7, "news-carousel");
        headerOneObvserver.observe(header1);
        $(".main").css("margin-top", desktopNavCtnHeight+"px");
        $(".main").css("--before-height", desktopNavCtnHeight+"px");

        $(".dynamic-glow").removeClass("glow-carousel-container");
        $(".dynamic-glow").addClass("glow-block-container");

        $(".dynamic-grid").removeClass("glow-carousel-container");
        $(".dynamic-grid").addClass("grid-view");
    }

    $(".search-input > input").on("focusout", function () {
        $(".search-bottom").css("height", "0");
        $(".search-bottom").css("padding", "0");
    });
    
    $(window).on('resize scroll', function() {
        if ($(window).width() <=1023) {
            if (window.scrollY >= 1) {
                $(".header2 > .mobile").css("box-shadow", "var(--bottom-box-shadow-2)");
            } else {
                $(".header2 > .mobile").css("box-shadow", "none");
            }
            $(".header2").css("height", mobileNavCtnHeight+"px");
            headerOneObvserver.unobserve(header1);
            $(".dynamic-glow").addClass("glow-carousel-container");
            $(".dynamic-glow").removeClass("glow-block-container");

            $(".dynamic-grid").addClass("glow-carousel-container");
            $(".dynamic-grid").removeClass("grid-view");
            
            // Make carousel width 78% of client viewport width
            let windowWidth = $(window).width();
            let viewport = $(".carousel-viewport");
            $('.carousel-viewport').width(windowWidth * .8);
            $('.carousel-viewport').each(function() {
                let childrenWidth = 0;
                $(this).children().each(function() {
                    childrenWidth += $(this).width() + parseInt($("html").css("font-size"));
                });
                if (childrenWidth < viewport.width()) {
                    $(this).css("justify-content", "center");
                } else {
                    $(this).css("justify-content", "unset");
                }
            });
        } else {
            $(".dynamic-glow").removeClass("glow-carousel-container");
            $(".dynamic-glow").addClass("glow-block-container");

            $(".dynamic-grid").removeClass("glow-carousel-container");
            $(".dynamic-grid").addClass("grid-view");
            headerOneObvserver.observe(header1);
            $(".header2").attr("style", "");
            $(".main").css("margin-top", desktopNavCtnHeight+"px");

            $(".search-input > input").on("focusout", function () {
                $(".search-bottom").css("height", "0");
                $(".search-bottom").css("padding", "0");
            });
        }
    });

    let pageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                let page = entry.target;
                // console.log(page);
                $(".page-link").removeClass("active");
                $("."+page.id+"-link").addClass("active");
            }
        });
    }, {threshold: 0.1})

    let pages = document.querySelectorAll(".page");

    pages.forEach((page) => {
        pageObserver.observe(page);
    });

    // $(".trial-btn").on("click", function () {
    //     // $(this).parents(".service-block").addClass("clicked");
    //     // $(".info-popup").attr("data-tab", $(this).attr("data-tab"));
    //     document.body.classList.add("hidden-overflow");
    //     $(".info-popup").fadeIn(100);
    // });

    $(".close-ctn").on("click", function () {
        // $(".service-block").removeClass("clicked");
        document.body.classList.remove("hidden-overflow");
        // $(".info-popup").removeAttr("data-tab");
        console.log("clicked");
        $(".info-popup").fadeOut(600);
    });

    let bannerObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !entry.target.classList.contains("apply-image")) {
                entry.target.classList.add("apply-image");
                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: $(window).height() + "px",
        threshold: 0.0
    })

    let banners = document.querySelectorAll(".banner");
    banners.forEach(banner => bannerObserver.observe(banner));
});


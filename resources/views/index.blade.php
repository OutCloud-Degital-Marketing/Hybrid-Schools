<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hybrid Schools Inner City</title>

    <meta name="title" content="{{ $pageTitle }}">
    <meta name="description" content="{{ $description }}">
    <meta property="image" content="{{ URL::asset($banner) }}">
    <meta property="url" content="{{ url()->full() }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="12 days">
    <meta name="author" content="Outcloud">
    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->full() }}">
    <meta name="og:title" content="{{ $pageTitle }}">
    <meta name="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ URL::asset($banner) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->full() }}">
    <meta property="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="{{ URL::asset($banner) }}">

    <link rel="canonical" href="{{ URL::asset($banner) }}" />
    <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">

    <!-- StyleSheets & JS -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/@glidejs/glide@3.3.0/dist/css/glide.core.min.css"> --}}
    {{-- <script src="https://unpkg.com/@glidejs/glide@3.3.0/dist/glide.min.js"></script> --}}
    <link rel="stylesheet" href="{{ URL::asset('/css/site/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/site/components.css') }}">
    {{-- <link rel="stylesheet" href="{{ URL::asset('/css/site/components/gallery.css') }}"> --}}

    <!-- Page StyleSheet -->
    <link rel="stylesheet" href="{{ URL::asset('/css/site/home/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/site/aboutus/aboutus.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/site/admin/admin.css') }}">
    {{-- <link rel="stylesheet" href="{{ URL::asset('/css/site/portfolio/portfolio.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('/css/site/institution/institution.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/site/contact/contact.css') }}">

    {{-- <link rel="stylesheet" href="{{ URL::asset('/css/site/components/animations.css') }}"> --}}

</head>
<body>
    @include('site.particles.header')
    <section class="main">
        @include('site.home')
        @include('site.aboutus')
        @include('site.admin')
        {{-- @include('site.portfolio') --}}
        @include('site.institution')
        @include('site.contact')
    </section>
    @include('site.particles.footer')
    <script src="{{ URL::asset('/js/site/main.js') }}"></script>
    <script src="{{ URL::asset('/js/site/otc_anim.js') }}"></script>
    {{-- <script src="{{ URL::asset('/js/site/production.js') }}"></script> --}}
    <script>
        $(".page-link").on("click", function(e) {
            if (!$(this).hasClass('external-link')) {
                e.preventDefault();
            }
            let page = $(this).attr("href");
            // console.log(page);
            let rootMargin = 0;

            if ($(window).width() >= 1236) {
                rootMargin = document.querySelector(".header2 > .desktop > .view").clientHeight - parseInt($("html")
                    .css("font-size")) * 3; // navbar shrinks by 1.5rem 
            } else if ($(window).width() >= 1024 && $(window).width() <= 1236) {
                rootMargin = document.querySelector(".header2 > .desktop > .view").clientHeight; // No shrinkage
            } else {
                rootMargin = document.querySelector(".header2 > .mobile > .view").clientHeight;
            }

            try {
                $(document).scrollTop($("#" + page).offset().top - rootMargin);
            } catch (error) {

            }
        });

        function runSnack(message) {
            message = $.parseHTML(message);
            $(".snack-message").empty();
            $('.snack-message').append(message);
            $('.snack-ctn').fadeIn(500);
            $('.snack-ctn').addClass("shown");
            setTimeout(function() {
                setTimeout(function() {
                    $('.snack-ctn').removeClass("shown");
                    $('.snack-ctn').fadeOut(290);
                }, 750);
            }, 3000)
        }

        // Make carousel width 78% of client viewport width
        // let windowWidth = $(window).width();
        // let viewport = $(".carousel-viewport");
        // $('.carousel-viewport').width(windowWidth * .8);
        // $('.carousel-viewport').each(function() {
        //     let childrenWidth = 0;
        //     $(this).children().each(function() {
        //         childrenWidth += $(this).width() + parseInt($("html").css("font-size"));
        //     });
        //     if (childrenWidth < viewport.width()) {
        //         $(this).css("justify-content", "center");
        //     } else {
        //         $(this).css("justify-content", "unset");
        //     }
        // });
        // $(window).on('resize scroll', function() {
        //     windowWidth = $(window).width();
        //     $('.carousel-viewport').width(windowWidth * .8);
        //     $('.carousel-viewport').each(function() {
        //         let childrenWidth = 0;
        //         $(this).children().each(function() {
        //             childrenWidth += $(this).width() + parseInt($("html").css("font-size"));
        //         });
        //         if (childrenWidth < viewport.width()) {
        //             $(this).css("justify-content", "center");
        //             $(".dir-arrow").hide();
        //         } else {
        //             $(this).css("justify-content", "unset");
        //             $(".dir-arrow").show();
        //         }
        //     });
        // });

        // Handle left and right direction buttons
        let carousel = document.querySelector('.carousel-viewport');
        let left = document.querySelector('.dir-arrow.left');
        let right = document.querySelector('.dir-arrow.right');
        let carouselCell = document.querySelector('.carousel-cell');
        $('.dir-arrow.right').on('click', function() {
            let carousel = $(this).parent(".pan-ctn").siblings(".carousel-viewport");
            // document.querySelectorAll("#portfolio .carousel-viewport .carousel-cell").forEach(elem => {console.log(elem.getBoundingClientRect())});
            let carouselCell = carousel.children(".carousel-cell");

            carousel.scrollLeft(carousel.scrollLeft() + carouselCell.width());
            // $(".carousel-viewport").scrollLeft($(".carousel-cell").width())
            // carousel.scrollLeft += carouselCell.clientWidth;
        });
        $('.dir-arrow.left').on('click', function() {
            let carousel = $(this).parent(".pan-ctn").siblings(".carousel-viewport");
            let carouselCell = carousel.children(".carousel-cell");

            carousel.scrollLeft(carousel.scrollLeft() + (-1 * carouselCell.width()));
            // carousel.scrollLeft -= carouselCell.clientWidth;
            // if (carouselCell.scrollLeft <= 0 ) {
            //     left.classList.add("faded")
            // } else {
            //     left.classList.remove("faded")
            // }
        });

        // TODO: Review this
        $("#contact-form").on('submit', function(e) {
            e.preventDefault()
            $.ajax({
                type: "post",
                url: "{{ url('/message') }}",
                data: $(this).serialize(),
                success: function(data) {
                    // console.log(data);
                    data = JSON.parse(data);
                    if (data['result'] === "success") {
                        runSnack(data['message']);
                    } else if (data['result'] === "error") {
                        runSnack(data['message']);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    runSnack("Unable to Send Message, Please try again later")
                }
            });
        });

        
    </script>
</body>
</html>
$(document).ready(function () {
    
//        window.onbeforeunload = function () {
//        window.scrollTo(0, 0);
//    }

    $("#header-mobile .title-menu").on('click', function () {
        $(".menu-mobile-content").toggle();
    });


    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $('#header').addClass('header2');
            $('#header-mobile').addClass('header-mobile2');
        } else {
            $('#header').removeClass('header2');
            $('#header').addClass('header');
            $('#header-mobile').removeClass('header-mobile2');
        }
    });
});
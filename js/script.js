$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    var swiper = new Swiper(".mySwiper", {
        loop: true,
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: true,
        pagination: {
            el: ".swiper-pagination",
            type: "custom",
            renderCustom: function (swiper, current, total) {
                return '<p>' + current + '</p>' + '<span></span>' + '<p>' + total + '</p>'; 
            }
        },
        navigation: {
            nextEl: '.down',
            prevEl: '.up',
        },
    });





    $(".menu_btn").click(function(){
        $(".menu_pop").toggleClass("active");
        $(".logo").toggleClass("active");

        if ( $(".menu_pop").hasClass("active") == true ) {
            $(".menu_pop .bg").animate({"opacity" : "0.95"},200);
            $(".menu_pop .menu_right").animate({"left" : "0px", "opacity" : "1"},300);
            $(".menu_pop .menu_box ul li a span").animate({"top" : "0px", "opacity" : "1"},300);
            setTimeout(function() { 
                $(".menu_pop .menu_box ul li a").css({"overflow" : "unset"});
            }, 200);
        } else if ( $(".menu_pop").hasClass("active") == false ) {
            $(".menu_pop .bg").animate({"opacity" : "0"},200);
            $(".menu_pop .menu_right").animate({"left" : "200px", "opacity" : "0"},300);
            $(".menu_pop .menu_box ul li a span").animate({"top" : "50px", "opacity" : "0"},300);
            $(".menu_pop .menu_box ul li a").css({"overflow" : "hidden"});
            $(".menu_btn div").css({"transform" : "rotate(0deg)"});
        }
    });


    $(".menu_btn").hover(function(){
        if ( $(".menu_pop").hasClass("active") == false ) {
            setTimeout(function() { 
                $(".menu_btn span:first-child").css({"margin-top" : "0"});
                $(".menu_btn span:last-child").css({"margin-top" : "0"});
            }, 100);
            setTimeout(function() { 
                $(".menu_btn span:first-child").css({"transform" : "rotate(90deg)"});
                $(".menu_btn span:last-child").css({"transform" : "rotate(360deg)"});
            }, 400);
        } else if ( $(".menu_pop").hasClass("active") == true ) {
            $(".menu_btn div").css({"transform" : "rotate(45deg)"});
        }
    }, function(){
        if ( $(".menu_pop").hasClass("active") == false ) {
            setTimeout(function() { 
                $(".menu_btn span:first-child").css({"margin-top" : "-14%"});
                $(".menu_btn span:last-child").css({"margin-top" : "14%"});
                $(".menu_btn span:first-child").css({"transform" : "rotate(0deg)"});
                $(".menu_btn span:last-child").css({"transform" : "rotate(0deg)"});
            }, 400);
        } else if ( $(".menu_pop").hasClass("active") == true ) {
            $(".menu_btn div").css({"transform" : "rotate(0deg)"});
            $(".menu_btn span:first-child").css({"transform" : "rotate(45deg)"});
            $(".menu_btn span:last-child").css({"transform" : "rotate(315deg)"});
        }
    });


    // $(".menu_btn").mouseenter(function(){
    //     if ( $(".menu_pop").hasClass("active") == false ) {
    //         setTimeout(function() { 
    //             $(".menu_btn span:first-child").css({"margin-top" : "0"});
    //             $(".menu_btn span:last-child").css({"margin-top" : "0"});
    //         }, 100);
    //         setTimeout(function() { 
    //             $(".menu_btn span:first-child").css({"transform" : "rotate(90deg)"});
    //             $(".menu_btn span:last-child").css({"transform" : "rotate(360deg)"});
    //         }, 400);
    //     } else if ( $(".menu_pop").hasClass("active") == true ) {
    //         $(".menu_btn div").css({"transform" : "rotate(45deg)"});
    //     }
    // });

    // $(".menu_btn").click(function(){
    //     if ( $(".menu_pop").hasClass("active") == false ) {
    //         setTimeout(function() { 
    //             $(".menu_btn span:first-child").css({"margin-top" : "-14%"});
    //             $(".menu_btn span:last-child").css({"margin-top" : "14%"});
    //             $(".menu_btn span:first-child").css({"transform" : "rotate(0deg)"});
    //             $(".menu_btn span:last-child").css({"transform" : "rotate(0deg)"});
    //         }, 400);
    //     } else if ( $(".menu_pop").hasClass("active") == true ) {
    //         $(".menu_btn div").css({"transform" : "rotate(0deg)"});
    //         $(".menu_btn span:first-child").css({"transform" : "rotate(45deg)"});
    //         $(".menu_btn span:last-child").css({"transform" : "rotate(315deg)"});
    //     }
    // });




    $(".menu_pop .menu_box ul li a span").mouseenter(function(){
        $(this).clearQueue().animate({"top" : "-15px", "left" : "-15px"},100);
    });
    $(".menu_pop .menu_box ul li a span").mouseleave(function(){
        $(this).clearQueue().animate({"top" : "0px", "left" : "0px"},100);
    });

    $(".menu_pop .menu_right div a").mouseenter(function(){
        $(this).clearQueue().animate({"top" : "-10px", "left" : "-10px"},100);
    });
    $(".menu_pop .menu_right div a").mouseleave(function(){
        $(this).clearQueue().animate({"top" : "0px", "left" : "0px"},100);
    });





    $(".left_fix_txt_box").click(function(){
        $("header .center").css({"opacity" : "0"});
        $(".portfolio_pop").animate({"left" : "0"},500);
        $(".logo").css({"background" : "url(../img/b-logo.png) no-repeat center/cover"});
        $(".portfolio_pop .close").css({"display" : "block"});

        setTimeout(function(){
            $(".portfolio_pop .close").animate({"opacity" : "1"});
            $(".portfolio_pop ul").css({"display" : "block"});
            $(".portfolio_pop ul li span").animate({"top" : "0px", "opacity" : "1"},400);

            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);
        },500);

        setTimeout(function(){
            $(".portfolio_pop ul li").css({"overflow" : "unset"});
            $(".portfolio_pop .port_in .port_contents a img").css({"opacity" : "1"});
        },700);

        setTimeout(function(){
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "-100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "-100%"},200);
        },900);
    });

    $(".portfolio_pop ul li").click(function(){
        $(".portfolio_pop ul li").removeClass("on");
        $(this).addClass("on");

        $(".portfolio_pop").animate( { scrollTop : 0 },250 );

        var pIndex = $(this).index();

        $(".portfolio_pop .port_in .port_box").removeClass("active");
        $(".portfolio_pop .port_in .port_box").eq(pIndex).addClass("active");

        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);

        setTimeout(function(){
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "-100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "-100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "100%"},200);
        },400);
    });

    $(".portfolio_pop .port_cate p").click(function(){
        $(".portfolio_pop .port_cate p").removeClass("on");
        $(this).addClass("on");

        var pIndex = $(this).index();

        $(".portfolio_pop .port_in .port_box").removeClass("active");
        $(".portfolio_pop .port_in .port_box").eq(pIndex).addClass("active");

        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
        $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);

        setTimeout(function(){
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "-100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "-100%"},200);
            $(".portfolio_pop .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "100%"},200);
        },400);
    });

    $(".portfolio_pop .close").click(function(){
        $("header .center").css({"opacity" : "1"});
        $(".portfolio_pop ul li").css({"overflow" : "hidden"});
        $(".portfolio_pop ul li span").animate({"top" : "100%"},150);

        setTimeout(function(){
            $(".portfolio_pop .port_in .port_contents a img").css({"position" : "absolute"});
            $(".portfolio_pop .port_in .port_contents a img").animate({"top" : "100%"},200);
            $(".portfolio_pop .close").animate({"opacity" : "0"});
        },170);
        setTimeout(function(){
            $(".portfolio_pop").animate({"left" : "-100%"},500);
            $(".logo").css({"background" : "url(../img/w-logo.png) no-repeat center/cover"});
        },400);
        setTimeout(function(){
            $(".logo").css({"background" : "url(../img/w-logo.png) no-repeat center/cover"});
        },900);
        setTimeout(function(){
            $(".portfolio_pop ul").css({"display" : "none"});
            $(".portfolio_pop .close").css({"display" : "none"});
            $(".portfolio_pop .port_in .port_contents a img").css({
                "position" : "unset",
                "top" : "0",
                "opacity" : "0"
            });
            $(".portfolio_pop ul li").removeClass("on");
            $(".portfolio_pop .port_in .port_box").removeClass("active");
            $(".portfolio_pop ul li:first-child").addClass("on");
            $(".portfolio_pop .port_in .port_box:first-child").addClass("active");
        },901);
    });





    $(".portfolio_pop .port_in .port_contents a").click(function(){
        $(".port_contents_pop").animate({"top" : "0"},400);
        setTimeout(function(){
            $(".port_contents_pop .close").css({"display" : "block"});
            $(".port_contents_pop .close").animate({"opacity" : "1"},400);
        },401)
    });

    $(".port_contents_pop .close").click(function(){
        $(".port_contents_pop").animate({"top" : "100%"},400);
        $(".port_contents_pop .close").css({"display" : "none"}, {"opacity" : "0"});

        $(".port_contents_pop").animate({ scrollTop : 0 }, 250 );
        return false;
    });

})
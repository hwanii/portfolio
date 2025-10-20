$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });




    $(".top_btn").click( function() {
        $("html, body").animate( { scrollTop : 0 }, 250 );
        return false;
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
        $(this).animate({"top" : "-15px", "left" : "-15px"},100);
    });
    $(".menu_pop .menu_box ul li a span").mouseleave(function(){
        $(this).animate({"top" : "0px", "left" : "0px"},100);
    });

    $(".menu_pop .menu_right div a").mouseenter(function(){
        $(this).animate({"top" : "-10px", "left" : "-10px"},100);
    });
    $(".menu_pop .menu_right div a").mouseleave(function(){
        $(this).animate({"top" : "0px", "left" : "0px"},100);
    });





    $(".visual_line_cir.cir01").hover(function(){
        $(this).animate({"top" : "-44.5rem", "right" : "-37rem"},170);
    }, function(){
        $(this).animate({"top" : "-45rem", "right" : "-37.5rem"},170);
    });

    $(".visual_line_cir.cir02").hover(function(){
        $(this).animate({"top" : "-43rem", "right" : "-40.5rem"},170);
    }, function(){
        $(this).animate({"top" : "-43.5rem", "right" : "-41rem"},170);
    });

    $(".visual_line_cir.cir03").hover(function(){
        $(this).animate({"top" : "-40.5rem", "right" : "-44.5rem"},170);
    }, function(){
        $(this).animate({"top" : "-41rem", "right" : "-45rem"},170);
    });





    setTimeout(function(){
        $(".project ul li span").animate({"top" : "0px", "opacity" : "1"},400);
        $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
        $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);
    },500);

    setTimeout(function(){
        $(".project .port_in .port_box .port_contents a img").css({"opacity" : "1"});
    },700);

    setTimeout(function(){
        $(".project ul li").css({"overflow" : "unset"});
        $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "100%"},200);
        $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "-100%"},200);
        $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "-100%"},200);
        $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "100%"},200);
    },900);


    $(".project ul li").click(function(){
        $(".project ul li").removeClass("on");
        $(this).addClass("on");

        var pIndex = $(this).index();

        $(".project .port_in .port_box").removeClass("active");
        $(".project .port_in .port_box").eq(pIndex).addClass("active");

        $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
        $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);

        setTimeout(function(){
            $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "-100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "-100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "100%"},200);
        },400);
    });

    $(".project .port_cate p").click(function(){
        $(".project .port_cate p").removeClass("on");
        $(this).addClass("on");

        var pIndex = $(this).index();

        $(".project .port_in .port_box").removeClass("active");
        $(".project .port_in .port_box").eq(pIndex).addClass("active");

        $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "0%"},200);
        $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "0"},200);
        $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "0"},200);

        setTimeout(function(){
            $(".project .port_in .port_contents a:nth-child(4n-3) .bg").animate({"top" : "100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n-2) .bg").animate({"left" : "-100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n-1) .bg").animate({"top" : "-100%"},200);
            $(".project .port_in .port_contents a:nth-child(4n) .bg").animate({"left" : "100%"},200);
        },400);
    });




    





    var swiper = new Swiper(".client_slide", {
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        speed: 1000,
        autoplay : {
            delay: 1500,
            disableOnInteraction: false,
        },
    });





    $(".notice_table ul li:first-child").click(function(){
        if ( $(this).hasClass('on') == true ) {
            $(".notice_table ul li:first-child").removeClass('on');
            $(".notice_table ul li:last-child").slideUp(200);
        } else {
            $(".notice_table ul li:first-child").removeClass('on');
            $(".notice_table ul li:last-child").slideUp(200);

            $(this).addClass('on');
            $(this).siblings("li").slideDown(200);
            $(this).children("span").addClass('on');
        }
    });





    $(".gallery_category li").click(function(){
        $(".gallery_category li").removeClass("on");
        $(this).addClass("on");

        var galCate = $(this).index();

        $(".gallery_click .gallery_contents").removeClass("active");
        $(".gallery_click .gallery_contents").eq(galCate).addClass("active");
    });





    $(".gallery .inner .gallery_box .contents").click(function(){
        if ( $(this).find("span").hasClass("instagram") == true ) {
            $(".gallery_pop_bg").hide();
            $(".gallery_pop").css({"right" : "-100%"});
        } else {
            $(".gallery_pop_bg").show();
            $(".gallery_pop").animate({"right" : "0"},400);
        }

        var spanColor = $(this).find("span").css("background-color");
        var pCate = $(this).find("p").text();
        var hContetns = $(this).find("h2").text();
        var contentsImg = $(this).find("img").attr("src");

        $(".gallery_pop .left").css({"background-color" : spanColor});
        $(".gallery_pop .left div p").text(pCate);
        $(".gallery_pop .left h2").text(hContetns);
        $(".gallery_pop .right .img_box > img").attr("src", contentsImg);

        if ( $(this).find("span").hasClass("worker") == true ) {
            $(".gallery_pop .left div span").addClass("white");
            $(".gallery_pop .left div p").css({"color" : "#fff"});
            $(".gallery_pop .left h2").css({"color" : "#fff"});
            $(".gallery_pop .left i").css({"color" : "#fff"});
        }
    });

    $(".gallery_pop_bg").click(function(){
        $(this).hide();
        $(".gallery_pop").animate({"right" : "-100%"},400);

        $(".gallery_pop .left div span").removeClass("white");
        $(".gallery_pop .left div p").css({"color" : "#000"});
        $(".gallery_pop .left h2").css({"color" : "#000"});
        $(".gallery_pop .left i").css({"color" : "#000"});
    });

    $(".gallery_pop .close").click(function(){
        $(".gallery_pop_bg").hide();
        $(".gallery_pop").animate({"right" : "-100%"},400);

        $(".gallery_pop .left div span").removeClass("white");
        $(".gallery_pop .left div p").css({"color" : "#000"});
        $(".gallery_pop .left h2").css({"color" : "#000"});
        $(".gallery_pop .left i").css({"color" : "#000"});
    });





    $(".project .port_in .port_box .port_contents a").click(function(){
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


    $(".member .inner .contents_row .contents").click(function(){
        $(this).toggleClass("active_bg");
    });

    $(".member .inner .contents_row .contents").mouseenter(function(){
        $(this).addClass("active_bg");
    });

    $(".member .inner .contents_row .contents").mouseleave(function(){
        $(this).removeClass("active_bg");
    });
})
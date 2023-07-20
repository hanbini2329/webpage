$(function () {
    //scroll시 top_img나타나게
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.top').fadeIn();
        } else {
            $('.top').fadeOut();
        }
    });

    //top아이콘 클릭시 부드럽게 이동
    $(".top").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
        return false
    });

    //header로고 클릭시 부드럽게 이동
    $("#header h1").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
        return false
    });

    //search 보이게
    function SearchBackOn() {
        $(".search_back").addClass("search_back_on")
        $("body").addClass("body_lock"); //body 스크롤안됨
    }

    function SearchBackOff() {
        $(".search_back").removeClass("search_back_on");
        $("body").removeClass("body_lock"); //body 스크롤안됨
    }

    $(".show").click(function () {
        $(".search_box").stop().slideDown('nomal');
        $(this).siblings(".cross_w").css("visibility", "visible");
        $(this).css("display", "none");
        SearchBackOn();
    });

    $(".cross_w").click(function () {
        $(".search_box").stop().slideUp('nomal');
        $(this).css("visibility", "hidden");
        $(this).next().css("display", "block");
        SearchBackOff()
    });

    //search_PC 설정
    $(".search_pc").click(function () {
        if($(".search_box").is(":visible")) {
            $(".search_box").stop().slideUp('nomal');
            SearchBackOff()
        }else{
            $(".search_box").stop().slideDown('nomal');
            SearchBackOn();
        }
    });

    $(".search_cross").click(function () {
        $(".search_box").stop().slideUp('nomal');
        SearchBackOff()
    });

    //main 설정

    //moblie
    $("#main1").slick({
        dots: true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
    })

    //tablet
    $("#main2").slick({
        dots: true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        /* arrows: false */
    })

    //desktop
    $("#main3").slick({
        dots: true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3000,
        /* arrows: false */
    })


    //BEST 리스트 더보기

    function listMore() {
        win = $(window).width();
        if (win <= 799) {
            $('.best>li').slice(0, 10).show(); 
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 2).show();
            });
        } else if (win > 799 && win <= 1289) {
            $('.best>li').slice(0, 6).show();
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 3).show();
            });
        } else {
            $('.best>li').slice(0, 8).show();
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 4).show();
            });
        }
    }
    listMore();
    $(window).on("resize", function () {
        listMore();
        location.reload()
    });
   
    //BEST wish_icon
    $(".best li").mouseover(function () {
        $(this).find('div').css("display", "block")

    })
    $(".best li").mouseout(function () {
        $(this).find('div').css("display", "none")

    })

    $(".wish img").on('click', function(){
        const src = ($(this).attr("src")=="img/heart.png")?"img/heart_full.png":"img/heart.png";
        $(this).attr("src", src)
        
    })


    //EVENT 설정
    $(".list").slick({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 4000,
    })

    //tablet desktop EVENT 설정
    $(".list1 ").slick({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 4000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1290, //미만
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }]
    })

    //video 설정
    $(".list2").slick({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 6000
    })

    //tablet desktop video 설정
    $(".list3").slick({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 6000
    })

    //project ani 설정
    $(".project_text").waypoint(function () {
        $(".project_text").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });

    //pc submenu
    $(".navi > li > a").mouseenter(function () {
        $(this).next().stop().slideDown(500);
        $('.sub1_back').stop().slideDown(500);
    });

    $(".navi>li").mouseleave(function () {
        $(this).find('.sub1').slideUp(500);
        $('.sub1_back').stop().slideUp(500);
    });

    //login 아이콘
    $(".my").mouseover(function () {
        $(this).find(".login").stop().slideDown("nomal");
    });
    $(".my").mouseout(function () {
        $(this).find(".login").stop().slideUp("nomal");
    });

    //quick_fixed
    const defaultTop = parseInt($(".quick_fixed").css("top"));

    $(window).on("scroll", function(){
        const scv=$(window).scrollTop(); //스크롤한 거리
        $(".quick_fixed").stop().animate({top:scv+defaultTop+"px"}, 700); 
    })


});
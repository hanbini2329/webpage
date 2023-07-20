$(document).ready(function () {
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

    //리스트 더보기
    function listMore() {
        win = $(window).width();
        if (win <= 799) {
            $('.best>li').slice(0, 10).show(); // 0부터10까지 보여줘라 
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 4).show();
            });
        } else if (win > 799 && win <= 1289) {
            $('.best>li').slice(0, 9).show();
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 6).show();
            });
        } else {
            $('.best>li').slice(0, 12).show();
            $('.more').click(function (e) {
                e.preventDefault();
                $('.best>li:hidden').slice(0, 8).show();
            });
        }
    }
    listMore();
    $(window).on("resize", function () {
        listMore();
        location.reload()
    });

    /* main 이미지 바꾸기 */
    $(".sub_navi li").click(function () {
        const strName = $(this).attr("class");
        slideTarget(strName.substr(3, 1));
        return false;

    });

    function slideTarget(n) {
        const pos = Number(n) * -100 + '%';
        $(".main ul").animate({
            left: pos
        }, 500, function () {
            $(".sub_navi li").removeClass("navi_on")
            $(".sub_navi li").eq(n).addClass("navi_on")
        });

    };

    /* list filter */
    $(".sub_navi li").on("click", function () {
        $(".sub_navi li").removeClass("navi_on")
        $(this).addClass("navi_on");

        const btnName = $(this).text();
        $("#container ul li").each(function () {
            const imgAlt = $(this).children().find("img").attr("data-list");
            if (btnName == "SHOPPING") {
                $("#container ul li").fadeIn();
            } else if (imgAlt == btnName) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                $(".more").css("display", "none")
            };
        });
    });

    //BEST wish_icon
    $(".best li").mouseover(function () {
        $(this).find('div').css("display", "block")

    })
    $(".best li").mouseout(function () {
        $(this).find('div').css("display", "none")

    })

    $(".wish img").on('click', function () {
        const src = ($(this).attr("src") == "img/heart.png") ? "img/heart_full.png" : "img/heart.png";
        $(this).attr("src", src)

    })

    /* best_list 설정 */
    $('#slick01').slick({
        centerMode: true,
        slide: "li",
        infinity: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 2000,
        arrows: true,
        pause: true,
        pauseOnHover: true,
        dots: false
    })

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
        if ($(".search_box").is(":visible")) {
            $(".search_box").stop().slideUp('nomal');
            SearchBackOff()
        } else {
            $(".search_box").stop().slideDown('nomal');
            SearchBackOn();
        }
    });

    $(".search_cross").click(function () {
        $(".search_box").stop().slideUp('nomal');
        SearchBackOff()
    });

    //pc submenu
    $(".navi>li>a").mouseenter(function () {
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

});
$(function () {
    const swiper = new Swiper(".swiper-container", {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetWeen: 30,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
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

    //tab_box fix
    $(".tab_box").each(function () {
        const $window = $(window)
        tabBox = $(this),
            tabBoxOffsetTop = tabBox.offset().top,

            $window.scroll(function () {
                if ($window.scrollTop() > tabBoxOffsetTop) {
                    tabBox.addClass("sticky")
                } else {
                    tabBox.removeClass("sticky")
                }
            })

    });

    /* .tab_box 클릭할때마다 */
    const contents = $("#contents > section")
    const menu = $(".tab_box .button_box > li")
    menu.on('click', function (event) {
        event.preventDefault();

        const tg = $(this);
        const i = tg.index();

        const section = contents.eq(i);
        const tt = section.offset().top-120;

        $("html, body").stop().animate({
            scrollTop: tt
        }, "nomal");

        $(".button_box li").removeClass("button_on")
        $(this).addClass("button_on")
    });

    //tab_box 스크롤 할때마다
    $(window).scroll(function(){
        const sct = $(window).scrollTop();
        contents.each(function(){
            const tg1 = $(this);
            const i =tg1.index();
            if(tg1.position().top-90<=sct){
                menu.removeClass("button_on");
                menu.eq(i).addClass("button_on");
            };

        });
    });

    //tab_box_pc fix
    $(".tab_box_pc").each(function () {
        const $window = $(window)
        tabBoxPC = $(this),
            tabBoxPCOffsetTop = tabBoxPC.offset().top,

            $window.scroll(function () {
                if ($window.scrollTop() > tabBoxPCOffsetTop) {
                    tabBoxPC.addClass("fixed")
                } else {
                    tabBoxPC.removeClass("fixed")
                }
            })

    });

    /* .tab_box_pc 클릭할때마다 */
    const contents_pc = $("#contents > section")
    const menu_pc = $(".tab_box_pc .button_box > li")
    menu_pc.on('click', function (event) {
        event.preventDefault();

        const tg = $(this);
        const i = tg.index();

        const section = contents_pc.eq(i);
        const tt = section.offset().top-150;

        $("html, body").stop().animate({
            scrollTop: tt
        }, "nomal");

        $(".button_box li").removeClass("button_on")
        $(this).addClass("button_on")
    });

    //tab_box_pc 스크롤 할때마다
    $(window).scroll(function(){
        const sct = $(window).scrollTop();
        contents_pc.each(function(){
            const tg1 = $(this);
            const i =tg1.index();
            if(tg1.position().top-120<=sct){
                menu_pc.removeClass("button_on");
                menu_pc.eq(i).addClass("button_on");
            };

        });
    });

    $(".list_img").waypoint(function () {
        $(".list_img").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });

    $(".delivery_img").waypoint(function () {
        $(".delivery_img").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });

    $(".review_box").waypoint(function () {
        $(".review_box").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });

    $(".best").waypoint(function () {
        $(".best").addClass("animated fadeInUp")
    }, {
        offset: "75%"
    });

    //scroll시 top_img나타나게
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.top').fadeIn();
        } else {
            $('.top').fadeOut();
        }
    });

    //top아이콘 클릭시 부드럽게 이동
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.top').fadeIn();
        } else {
            $('.top').fadeOut();
        }
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


})
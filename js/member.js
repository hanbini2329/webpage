$(function(){
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
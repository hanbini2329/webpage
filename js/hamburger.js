$(function () {


    //modal
    function modalOn() {
        $(".modal_back").addClass("back_on")
        $("body").addClass("body_lock"); //body 스크롤안됨
    }

    function modalOff() {
        $(".modal_back").removeClass("back_on");
        $("body").removeClass("body_lock"); //body 스크롤안됨
    }

    $(".hamburger").click(function () {
        modalOn();
    });

    $(".cross").click(function () {
        modalOff()
    });

    //#gnb open
    function Menu() {
        const active = $("#gnb").hasClass("active");
        $("#gnb").animate({
            left: active ? "0%" : "-100%"
        }, 500);
    };

    $(".hamburger").on("click", function () {
        $("#gnb").toggleClass("active");
       Menu();
    });

    $(".cross").on("click", function () {
        $("#gnb").toggleClass("active");
        Menu();
    });


    //sub 보이게
    $(".toggle").click(function () {
        if ($(this).parent().next().is(":visible")) {
            $(this).parent().next().stop().slideUp(500);
            $(this).find("span").removeClass("active");
        } else {
            $(".sub").stop().slideUp(500);
            $(this).parent().next().stop().slideDown(500);
            $(".menu>li>p>span").removeClass("active");
            $(this).find("span").addClass("active");
        }
    });




})
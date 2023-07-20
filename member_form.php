<? 
	session_start(); 
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/member_form.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/hamburger.js"></script>
    <script>
    function check_id() {
        window.open("check_id.php?id=" + document.member_form.id.value,
            "IDcheck",
            "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
    }

    //let reg_pw2 = /(?=.*[a-zA-ZS])(?=.*?[#?!@$%^&*-]).{6,24}/; // 문자와 특수문자 조합의 6~24 자리

    function check_input() {
        const re1 = /^(?=.*[a-zA-Z])(?=.*[0-9]).{6,10}$/;
        const id = document.member_form.id.value;
        if (!document.member_form.id.value) {
            alert("아이디를 입력하세요.");
            document.member_form.id.focus();
            return;
        } else if (!re1.test(id)) {
            alert("6~10자의 영문자,숫자 혼합해서 사용할 수 있습니다.");
            return false;
        }


        if (!document.member_form.pwd1.value) {
            alert("비밀번호를 입력하세요.");
            document.member_form.pwd1.focus();
            return;
        }

        if (!document.member_form.pwd2.value) {
            alert("비밀번호확인을 입력하세요.");
            document.member_form.pwd2.focus();
            return;
        }

        if (document.member_form.pwd1.value !=
            document.member_form.pwd2.value) {
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");
            document.member_form.pass.focus();
            document.member_form.pass.select();
            return;
        }

        if (!document.member_form.email.value) {
            alert("Email을 입력하세요.");
            document.member_form.email.focus();
            return;
        }

         // 이메일 체크
         const email = document.member_form.email.value;
        //const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //위의 식도 가능하다
        const re = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/;
        if (!re.test(email)) {
            alert("@를 포함해서 입력해주세요");
            return false;

        }


        if (!document.member_form.name.value) {
            alert("이름을 입력하세요.");
            document.member_form.name.focus();
            return;
        }

        if (!document.member_form.birth.value) {
            alert("생년월일 8자리를 입력해 주세요.");
            document.member_form.nick.focus();
            return;
        }


        if (!document.member_form.hp.value) {
            alert("휴대폰 번호를 입력하세요");
            document.member_form.hp.focus();
            return;
        }

        //휴대전화번호 체크
        const hp1 = document.member_form.hp.value;
        const re2 = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
        if (!re2.test(hp1)) {
            alert('휴대전화번호를 다시 입력해주세요.');
            return false;
        }

        if (!document.member_form.addr.value) {
            alert("주소를 입력하세요");
            document.member_form.hp.focus();
            return;
        }

        document.member_form.submit();
    }

    function reset_form() {
        document.member_form.id.value = "";
        document.member_form.pwd1.value = "";
        document.member_form.pwd2.value = "";
        document.member_form.email.value = "";
        document.member_form.name.value = "";
        document.member_form.birth.value = "";
        document.member_form.hp.value = "";
        document.member_form.addr.value = "";

        document.member_form.id.focus();

        return;
    }
    </script>
</head>

<body>
    <header id="header">
        <h1><a href="index.html"><img src="img/logo.png" alt="Logo"></a></h1>
        <div class="hamburger"><img src="img/ham_W.png" alt="햄버거버튼"></div>
        <ul class="icon cf">
            <li class="search_icon">
                <a href="javascript:void(0)">
                    <img class="cross_w" src="img/cross_W.png" alt="닫기 아이콘">
                    <img class="show" src="img/search_W.png" alt="검색아이콘">
                </a>
            </li>
            <li>
                <a href="login.html">
                    <img src="img/mypage_W.png" alt="로그인 아이콘">
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <img src="img/shopping_W.png" alt="장바구니아이콘">
                </a>
            </li>
        </ul>
    </header>
    <div class="search_box">
        <div class="search_box1">
            <div>
                <p>
                    <input type="text" id="value" placeholder="검색어를 입력해 주세요.">
                </p>
                <p class="s_img">
                    <a href="javascript:void(0)">
                        <img src="img/search.png" alt="검색아이콘">
                    </a>
                </p>
            </div>
            <div class="tag">
                <p>추천검색어</p>
                <ul>
                    <li><a href="page.html"># 베어 워터 쿠션</a></li>
                    <li><a href="javascript:void(0)"># 누 제로 쿠션</a></li>
                    <li><a href="javascript:void(0)"># 베어 레이어 팔레트</a></li>
                </ul>
                <ul>
                    <li><a href="javascript:void(0)"># 글래스팅 멜팅 밤</a></li>
                    <li><a href="javascript:void(0)"># 쥬시 래스팅 틴트</a></li>
                    <li><a href="javascript:void(0)"># 한올 브로우 마스카라</a></li>
                </ul>
            </div>
            <div class="search_cross desktop cf">
                <p>closed</p>
                <p><img src="img/up.png" alt="검색창 올리기"></p>
            </div>
        </div>
    </div>
    <div class="search_back"></div>
    <div class="modal_back"></div>
    <nav id="gnb">
        <ul class="topban">
            <li>
                <a href="javascript:void(0)">
                    <img src="img/shopping.png" alt="장바구니아이콘">
                </a>
            </li>
            <li class="cross">
                <a href="javascript:void(0)">
                    <img src="img/cross.png" alt="닫기아이콘">
                </a>
            </li>
        </ul>
        <ul class="search cf">
            <li>
                <input type="text" required placeholder="Search">
            </li>
            <li>
                <a href="javascript:void(0)">
                    <img src="img/search.png" alt="검색아이콘">
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li>
                <p class="toggle"><a href="list.html">SHOPPING</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="javascript:void(0)">BASE</a></li>
                <li><a href="javascript:void(0)">EYE</a></li>
                <li><a href="javascript:void(0)">LIP</a></li>
                <li><a href="javascript:void(0)">NAIL</a></li>
                <li><a href="javascript:void(0)">TOOL</a></li>
                <li><a href="javascript:void(0)">SET</a></li>
                <li><a href="javascript:void(0)">EDITION</a></li>
            </ul>
            <li>
                <p class="toggle"><a href="javascript:void(0)">EVENT</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="javascript:void(0)">당첨자 발표</a></li>
                <li><a href="javascript:void(0)">진행중 이벤트</a></li>
                <li><a href="javascript:void(0)">종료된 이벤트</a></li>
            </ul>
            <li>
                <p class="toggle"><a href="review_list.php">REVIEW</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="javascript:void(0)">BEST REVIEW</a></li>
                <li><a href="javascript:void(0)">PHOTO REVIEW</a></li>
            </ul>
            <li>
                <p class="toggle"><a href="javascript:void(0)">COMMUNITY</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="javascript:void(0)">NOTICE</a></li>
                <li><a href="javascript:void(0)">룩튜토리얼</a></li>
                <li><a href="javascript:void(0)">Q&amp;A</a></li>
                <li><a href="javascript:void(0)">1:1상담</a></li>
                <li><a href="javascript:void(0)">STORE</a></li>
            </ul>
            <li>
                <p class="toggle"><a href="javascript:void(0)">BRAND</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="javascript:void(0)">롬앤소식</a></li>
            </ul>
        </ul>
        <ul class="box">
            <? include "top_login2.php"; ?>
            <li><a href="javascript:void(0)">배송조회</a></li>
            <li><a href="javascript:void(0)">Q&amp;A 상품문의</a></li>
            <li><a href="javascript:void(0)">고객센터 전화연결</a></li>
        </ul>
    </nav>
    <!-- desktop header -->
    <header id="deskheader" class="desktop">
        <h2><a href="index.html"><img src="img/logo.png" alt="logo"></a></h2>
        <div class="sub1_back"></div>
        <nav id="dmenu" class="cf">
            <ul class="navi">
                <li>
                    <a href="list.html">SHOPPING</a>
                    <ul class="sub1 cf">
                        <li><a href="javascript:void(0)">BASE</a></li>
                        <li><a href="javascript:void(0)">EYE</a></li>
                        <li><a href="javascript:void(0)">LIP</a></li>
                        <li><a href="javascript:void(0)">NAIL</a></li>
                        <li><a href="javascript:void(0)">TOOL</a></li>
                        <li><a href="javascript:void(0)">SET</a></li>
                        <li><a href="javascript:void(0)">EDITION</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">EVENT</a>
                    <ul class="sub1 cf width1">
                        <li><a href="javascript:void(0)">진행중 이벤트</a></li>
                        <li><a href="javascript:void(0)">종료된 이벤트</a></li>
                        <li><a href="javascript:void(0)">당첨자 발표</a></li>
                    </ul>
                </li>
                <li>
                    <a href="review_list.php">REVIEW</a>
                    <ul class="sub1 cf width1">
                        <li><a href="javascript:void(0)">BEST REVIEW</a></li>
                        <li><a href="javascript:void(0)">PHOTO REVIEW</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">COMMUNITY</a>
                    <ul class="sub1 cf">
                        <li><a href="javascript:void(0)">NOTICE</a></li>
                        <li><a href="javascript:void(0)">룩튜토리얼</a></li>
                        <li><a href="javascript:void(0)">Q&amp;A</a></li>
                        <li><a href="javascript:void(0)">1:1상담</a></li>
                        <li><a href="javascript:void(0)">STORE</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">BRAND</a>
                    <ul class="sub1 cf">
                        <li><a href="javascript:void(0)">롬앤소식</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="search1">
                <li>
                    <a href="javascript:void(0)">
                        <img class="search_pc" src="img/search_W.png" alt="검색아이콘">
                    </a>
                </li>
                <li class="my">
                    <a href="javascript:void(0)">
                        <img src="img/mypage_W.png" alt="로그인 아이콘">
                    </a>
                    <div class="login">
                        <a href="login.html">Log-in</a>
                        <a href="javascript:void(0)">My page</a>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <img src="img/shopping_W.png" alt="장바구니아이콘">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <fieldset id="container">
        <legend>회원가입</legend>
        <form name="member_form" method="post" action="insert.php">
            <div class="wrap">
                <ul>
                    <li>
                        <div id="id1">
                            <label class="skip" for="id">아이디</label>
                            <input type="text" id="id" name="id" placeholder="아이디">
                        </div>
                        <div id="id2">
                            <a href="javascript:void(0)" onclick="check_id()">중복체크</a>
                        </div>
                    </li>
                    <li>
                        <label class="skip" for="pwd1">비밀번호</label>
                        <input type="password" id="pwd1" name="pwd1" placeholder="비밀번호">
                    </li>
                    <li>
                        <label class="skip" for="pwd2">비밀번호 확인</label>
                        <input type="password" id="pwd2" name="pwd2" placeholder="비밀번호 확인">
                    </li>
                    <li>
                        <label class="skip" for="email">이메일</label>
                        <input type="email" id="email" name="email" placeholder="이메일">
                    </li>
                    <li>
                        <label class="skip" for="name">이름</label>
                        <input type="text" id="name" name="name" placeholder="이름">
                    </li>
                    <li>
                        <label class="skip" for="birth">생년월일</label>
                        <input type="text" id="birth" name="birth" placeholder="생년월일 8자리">
                    </li>
                    <li>
                        <label class="skip" for="hp">전화번호</label>
                        <input type="tel" id="hp" name="hp" placeholder="전화번호">
                    </li>
                    <li>
                        <label class="skip" for="adr">주소</label>
                        <input type="text" id="adr" name="addr" placeholder="주소">
                    </li>
                </ul>
            </div>
            <div id="button">
                <a href="index.html" onclick="reset_form()">돌아가기</a>
                <a href="javascript:void(0)" onclick="check_input()">가입하기</a>
            </div>
        </form>
    </fieldset>
    <div class="best_list">
        <ul id="slick01">
            <li><a href="javascript:void(0)"><img src="img/shop_m1.png" alt="best_list1"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m2.png" alt="best_list2"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m3.png" alt="best_list3"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m4.png" alt="best_list4"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m5.png" alt="best_list5"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m6.png" alt="best_list6"></a></li>
            <li><a href="javascript:void(0)"><img src="img/shop_m7.png" alt="best_list7"></a></li>
        </ul>
    </div>
    <footer id="footer" class="mobile">
        <div class="foot1">
            <a href="https://www.instagram.com/romandyou/"><img src="img/sns_i_B.png" alt="instagram"></a>
            <a href="https://www.facebook.com/romandyou"><img src="img/sns_f_B.png" alt="facebook"></a>
            <a href="https://blog.naver.com/romandyou"><img src="img/sns_b_B.png" alt="blog"></a>
            <a href="https://www.youtube.com/channel/UC2uKY1XseEBI5Gorsy2DRZg"><img src="img/sns_y_B.png"
                    alt="youtube"></a>
            <li><a href="https://pf.kakao.com/_RzWSu"><img src="img/sns_k_B.png" alt="kakao"></a></li>
        </div>
        <p class="foot2">
            <img src="img/foot_m.png" alt="foot LOGO">
        </p>
        <div class="foot3">
            <ul>
                <li>롬앤 고객센터</li>
                <li>1670-2238</li>
            </ul>
            <ul>
                <li>Mon-Fri. 10:00 ~ 17:00</li>
                <li>Lunch. 12:00 ~ 13:30</li>
                <li>토,일 공휴일 휴무</li>
            </ul>
        </div>
        <div class="foot4">
            <span>대표자 김태욱,김성현</span><span>대표전화 1670-2238 ㅣ 개인정보관리책임 허지혜</span><span>주소 서울특별시 송파구 동남로 122 (문정동) COLLECTED
                빌딩</span><span>사업자등록번호 120-86-00633 ㅣ 통신판매업신고 제2022-서울송파-1690호</span>
        </div>
        <div class="foot5">
            <span>신한은행 140-008-192572</span><span>예금주 (주)아이패밀리에스씨</span>
        </div>
        <div class="foot6">
            <ul>
                <li><a href="login_form.php">로그인</a></li>
                <li><a href="member.html">회원가입</a></li>
                <li><a href="javascript:void(0)">PC 버전</a></li>
            </ul>
        </div>
        <div class="foot7">
            <ul>
                <li><a href="javascript:void(0)">회사소개</a></li>
                <li><a href="javascript:void(0)">쇼핑가이드</a></li>
                <li><a href="javascript:void(0)">개인정보 보호정책</a></li>
                <li><a href="javascript:void(0)">이용약관동의</a></li>
            </ul>
        </div>
        <div class="foot8">
            Copyright © 2017 rom&nd. All rights reserved.
        </div>
    </footer>

    <footer id="pcfoot" class="tablet desktop">
        <div class="pcfoot1">
            <p class="pcfoot1_1">
                <img src="img/foot logo.png" alt="foot LOGO">
            </p>
            <p>
                <a href="mailto:romandyou@romand.co.kr">
                    <img src="img/marketing.png" alt="marketing">
                </a>
            </p>
            <p>
                <a href="mailto:export@romand.co.kr">
                    <img src="img/rmd_footer_store.jpg" alt="store">
                </a>
            </p>
            <p>
                <a href="https://romand.co.kr/board/gallery/list.html?board_no=25">
                    <img src="img/rmd_footer_benefit.jpg" alt="benefit">
                </a>
            </p>
            <p>
                <a href="https://romand.co.kr/product/project.html?cate_no=80">
                    <img src="img/global_expert.png" alt="global">
                </a>
            </p>

        </div>
        <div class="pcfoot2">
            <div class="pcfoot2_1">
                <ul class="foot_left">
                    <li>
                        <a href="#">
                            <img src="img/foot1.jpg" alt="foot logo">
                        </a>
                    </li>
                    <ul class="foot_sns cf">
                        <li>
                            <a href="https://www.youtube.com/channel/UC2uKY1XseEBI5Gorsy2DRZg"><img src="img/sns y.png"
                                    alt="youtube"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/romandyou/"><img src="img/sns i.jpg" alt="instagram"></a>
                        </li>
                        <li>
                            <a href="https://blog.naver.com/romandyou"><img src="img/sns b.jpg" alt="blog"></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/romandyou"><img src="img/sns f.jpg" alt="facebook"></a>
                        </li>
                        <li>
                            <a href="https://pf.kakao.com/_RzWSu"><img src="img/sns k.jpg" alt="kakao"></a>
                        </li>
                    </ul>
                </ul>
                <div class="foot_right">
                    <p class="txt4">(주)아이패밀리SC</p>
                    <span>서울특별시 송파구 동남로 122(문정동)COLLECTED 빌딩 Tel : 02. 1670. 2238 <br>통신판매신고번호 : 제2022-서울송파-1690호 대표자 :
                        김태욱,김성현</span>
                    <ul>
                        <li><a href="javascript:void(0)">개인정보보호정책</a></li>
                        <li><a href="javascript:void(0)">이용약관동의</a></li>
                    </ul>
                    <span>© 2017 IFAMILY SC, CO.,LTD.ALL Right Reserved</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
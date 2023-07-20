<? 
  session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/greet.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/review.css" type="text/css" media="all">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/hamburger.js"></script>
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
                <p class="toggle"><a href="#">BRAND</a><span></span></p>
            </li>
            <ul class="sub">
                <li><a href="#">롬앤소식</a></li>
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
                        <? include "top_login1.php"; ?>
                        <p><a href="javascript:void(0)">My page</a></p> 
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
   <div id="wrap">
        <div id="content">
            <div id="col2">
                <div id="title">REVIEW</div>
                <div class="clear"></div>

                <div id="write_form_title">리뷰작성</div>
                <div class="clear"></div>

                <form name="board_form" method="post" action="insert1.php">
                    <div id="write_form">
                        <div class="write_line"></div>
                        <div id="write_row1">
                            <div class="col1"> 아이디 </div>
				            <div class="col2"><?=$_SESSION['userid']?></div>
                            <!-- <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div> -->
			            </div>
			            <div class="write_line"></div>
			            <div id="write_row2">
			                <div class="col1">제목</div>
		                    <div class="col2"><input type="text" name="subject"></div>
			            </div>
			            <div class="write_line"></div>
		                <div id="write_row3">
			            	<div class="col1">내용</div>
	                        <div class="col2"><textarea name="content"></textarea></div>
		                </div>
			            <div class="write_line"></div>
		            </div>

        		    <div id="write_button">
                        <input type="submit" value="완료">&nbsp;
        				<a href="review_list.php?page=<?=$page?>">목록</a>
        		    </div>
        		</form>
        	</div> <!-- end of col2 -->
        </div> <!-- end of content -->
    </div> <!-- end of wrap -->
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
                <? include "top_login2.php"; ?>
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
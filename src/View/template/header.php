<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="google-site-verification" content="1EPcGkkmlQ66LSLiE5JFp1tYDo-iznhE22zoJo6ZR7M" />
<meta name="viewport" content="width=device-width">
<title><?= $title?></title>

<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/css/default.css">
<link rel="stylesheet" href="/css/sh_style.css">
<link rel="stylesheet" href="/sh_img/hd/top_menu/style.css">
<link rel="stylesheet" href="/sh_img/index/main_banner/style.css">
<link rel="stylesheet" href="/sh_img/include/inc01/style.css">
<link rel="stylesheet" href="/sh_img/include/inc02/style.css">
<link rel="stylesheet" href="/sh_img/include/inc03/style.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/mobile.css">

<link rel="stylesheet" href="/css/user.css">
<link rel="stylesheet" href="/css/page_style.css">
<style>
@import url(earlyaccess/nanumpenscript.css);
@import url(earlyaccess/nanumbrushscript.css);
@import url(earlyaccess/nanumgothic.css);
@import url(earlyaccess/nanummyeongjo.css);
@import url(earlyaccess/nanumgothiccoding.css);

@import url(css/sh_font.css);
</style><link rel="stylesheet" href="/fontawesome/css/font-awesome.min.css">
<!--[if lte IE 8]>
<script src="http://seoulcarehome.com/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "carehome";
var g5_bbs_url   = "carehome/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="/js/jquery-1.8.3.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.menu.js"></script>
<script src="/js/common.js"></script>
<script src="/js/wrest.js"></script>
<script src="/js/placeholders.min.js"></script>
<!--[if lte IE 8]>
<script src="http://seoulcarehome.com/js/selectivizr.js"></script>
<![endif]-->
<script src="/sh_img/hd/top_menu/script.js"></script>
<script src="/sh_img/index/main_banner/script.js"></script>
</head>
<body>
<!-- 100% 배경이미지 때문에 사용 -->
<div id="sh_wrapper">
    <!-- 상단 시작 { -->
    <div id="sh_hd">	
        <div class="top_nav_bg"></div>
        <h1 id="hd_h1">인삼골주간보호센터</h1>
        <div id="skip_to_container"><a href="#sh_container">본문 바로가기</a></div>
        
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->        <div id="sh_hd_wrapper">
            
<div id="top_nav_wrap" >
	<!-- 로고 -->
    <div id="top_logo">
        <a href="/"><img src="/sh_img/hd/top_menu/logo.png" alt="인삼골주간보호센터" /></a>
    </div>
		
    <a id="logo_fixed" href="/">인삼골주간보호센터</a>
	<!-- 상단메뉴 -->
    <ul id="top_nav">
                <li class="list list01">
            <a href="/page6">인삼골주간보호센터소개 </a>
            <ul class="sub_ul1">
                                <li><a href="/page6">인사말</a></li>
                                <li><a href="/page38">시설안내</a></li>
                                <li><a href="/page8"> 오시는길</a></li>
                            </ul>
        </li>
                <li class="list list02">
            <a href="/page37">서비스안내</a>
            <ul class="sub_ul2">
                                <li><a href="/page37">요양서비스</a></li>
                            </ul>
        </li>
                <li class="list list03">
            <a href="/page39">이용방법</a>
            <ul class="sub_ul3">
                                <li><a href="/page39">이용방법</a></li>
                                <li><a href="/page40">비용안내</a></li>
                            </ul>
        </li>
                <li class="list list04">
            <a href="/page43">요양원소식</a>
            <ul class="sub_ul4">
                                <li><a href="/page43">공지사항</a></li>
                                <li><a href="/page42">자료실</a></li>
                            </ul>
        </li>
                <li class="list list05">
            <a href="/page45">사랑나눔</a>
            <ul class="sub_ul5">
                                <li><a href="/page45">자원봉사</a></li>
                                <li><a href="/page46">후원안내</a></li>
                            </ul>
        </li>
            </ul>
	<div class="tel_wrap">
        <span><i class="fa fa-phone"></i></span>043-838-6645
    </div>
</div>
<!-- 소분류 끝 -->

<script>
// 스크롤시 메뉴 상단 고정
$(window).on("scroll",function(){
    if($(window).scrollTop() > 90) { 
        $('#top_nav_wrap').addClass("fixed");
    } else{
        $('#top_nav_wrap').removeClass("fixed");
    }
    return false;
});
</script>	
        </div>
    </div>
    <!-- } 상단 끝 -->
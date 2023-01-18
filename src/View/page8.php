<!-- 콘텐츠 시작 { -->
    <div id="sh_container">
        <div id="sh_container_wrapper">
                        
<div id="sub_bg">
    <div class="tit_area">
        <span>Insamgol Day Care Center</span>
        <h2> 오시는길</h2>
    </div>
</div>    

<script>
$(document).ready(function(){
	$('#sub_bg span').delay(0).animate({opacity: '1',"margin-top":"0"},800);
	$('#sub_bg h2').delay(0).animate({opacity: '1',"margin-top":"0"},800);
});
</script>            <!-- 서브메뉴 -->
            <div id="sh_aside">
                <div id="sh_aside_wrapper">
<ul id="sh_snb">
        <li >
        <a href="/page6">인사말</a>
    </li>
        <li >
        <a href="/page38">시설안내</a>
    </li>
        <li class='snb_on' >
        <a href="/page8"> 오시는길</a>
    </li>
    </ul>
<!-- 소분류 끝 --></div>
            </div>
    
            <!-- 콘텐츠영역 -->
            <div id="sh_content">
            
<div id="sh_map_v">

    <div class="tit_area">
        <span>ADDRESS</span>
        <p>증평군 증평읍 광장로 30 홍익프라자 3층</p>
    </div>

    <div id="sh_iframe_wrap">
        <iframe id="sh_iframe" frameborder='0' border='0' marginwidth='0' marginheight='0' scrolling='no' title="인삼골주간보호센터<br>증평군 증평읍 광장로 30 홍익프라자 3층<br>043-838-6645 오시는길"></iframe>
    </div>

    
            <dl class="info">
    	<dt><img src="../img/icon03.png" alt="고객센터" /></dt>
        <dd>
        	<p>고객센터</p>
            <div>Tel  : 043-838-6645<br />
주차장 시설 완비</div>
        </dd>
    </dl>    
        
    </div>


<script>
//기본 공통 자료.
var sh_map_name = 'Naver';
var sh_width = $("#sh_iframe").width();
var sh_height =  (sh_width * 0.5) * 1.1;
$('#sh_iframe').css("width",sh_width+'px');
$('#sh_iframe').css("height",sh_height+'px');

var sh_subj = '%EC%9D%B8%EC%82%BC%EA%B3%A8%EC%A3%BC%EA%B0%84%EB%B3%B4%ED%98%B8%EC%84%BC%ED%84%B0%3Cbr%3E%EC%A6%9D%ED%8F%89%EA%B5%B0%20%EC%A6%9D%ED%8F%89%EC%9D%8D%20%EA%B4%91%EC%9E%A5%EB%A1%9C%2030%20%ED%99%8D%EC%9D%B5%ED%94%84%EB%9D%BC%EC%9E%90%203%EC%B8%B5%3Cbr%3E043-838-6645'; //업체명
var sh_x = '36.7897885';    //x좌표
var sh_y = '127.5783091';    //y좌표
var sh_zoom = '';	//지도 확대 정도

if(sh_map_name == 'Naver'){
	//끌어오는 API원본 경로
	var exist_map_url = 'http://www.hwr.kr/sh_page/sh_map.php'; 
	//전달하는 추가 URL정보
	var exist_map_add_url = 'sh_x='+sh_x+'&sh_y='+sh_y+'&sh_name='+sh_subj+'&sh_set=utf8&sh_height='+sh_height+'&sh_width='+sh_width+"&sh_zoom="+sh_zoom;
}

if(sh_map_name == 'Daum'){
	//끌어오는 API원본 경로
	var exist_map_url = 'http://intranet.shiningcorp.com/Daum_map.php'; 
	//전달하는 추가 URL정보
	var exist_map_add_url = "sh_name="+sh_subj+"&lat="+sh_x+"&lng="+sh_y+"&sh_height="+sh_height+"&sh_width="+sh_width+"&sh_zoom="+sh_zoom;
}

if(sh_map_name == 'Google'){
	//영문버전 or 한글버전
	var sh_language = '';
	//끌어오는 API원본 경로
	var exist_map_url = 'http://intranet.shiningcorp.com/Google_map.php'; 
	//전달하는 추가 URL정보
	var exist_map_add_url = "sh_name="+sh_subj+"&lat="+sh_x+"&lng="+sh_y+"&sh_zoom="+sh_zoom+"&sh_language="+sh_language;
}
//iframe에 src값 전달.
document.getElementById("sh_iframe").src = exist_map_url+"?"+exist_map_add_url;

</script>

    	</div><!-- sh_content -->
   
	</div><!-- sh_container_wrapper --> 
</div><!-- sh_container -->
<!-- } 콘텐츠 끝 -->
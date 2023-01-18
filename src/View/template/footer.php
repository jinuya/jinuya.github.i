<!-- 하단 시작 { -->
  <div id="sh_ft">	
	<div class="ft_area">
        <div class="ft_info">
            <h1>인삼골주간보호센터</h1>
            <ul class="ft_menu">
                <li><a href="/page6">요양원소개</a></li>
                <li><a href="/page37">서비스안내</a></li>
                <li><a href="/page39">이용방법</a></li>
                <li><a href="/bbs/board.php?bo_table=table43">요양원소식</a></li>
                <li><a href="/page45">사랑나눔</a></li>
            </ul>
            <p class="info_txt">업체명 : 인삼골주간보호센터 | 주소 : 충북 증평군 증평읍 광장로 30 3층 | 사업자번호: 658-80-01019<br />
대표전화 : 043-838-6645 | E-mail : insamgoldaycare@gmail.com</p>
            <p class="copy">ⓒ 인삼골주간보호센터 All rights reserved.</p>
        </div>
        <div class="ft_time">
          <p class="ft_tit">CONTACT US</p>
          <p class="ft_tel">043-838-6645</p>
          <p class="time_info">
               Fax : 043) 838-6647<br>
      E-mail : insamgoldaycare@gmail.com
          </p>
          <p class="adm_link">
          <a href="/admin/admin.login.php">ADMIN</a>
          <a href="http://hos.make24.kr/" target="_blank">MAKE24</a></p>
      </div>
    </div>
</div>
<!-- 100% 배경이미지 때문에 사용 -->
</div>


<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
<script defer src="http://ad.shiningcorp.com/s1/adbyshining.js"></script>
</body>
</html>

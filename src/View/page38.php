<!-- 콘텐츠 시작 { -->
    <div id="sh_container">
        <div id="sh_container_wrapper">
                        
<div id="sub_bg">
    <div class="tit_area">
        <span>Insamgol Day Care Center</span>
        <h2>시설안내</h2>
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
        <li class='snb_on' >
        <a href="/page38">시설안내</a>
    </li>
        <li >
        <a href="/page8"> 오시는길</a>
    </li>
    </ul>
<!-- 소분류 끝 --></div>
            </div>
    
            <!-- 콘텐츠영역 -->
            <div id="sh_content">
            <!-- 게시물 읽기 시작 { -->

<article id="sh_bo_v">
    <header>
        <h3 id="bo_v_title">
            <span class="subject">시설안내</span>
            <span class="context">쾌적하고 깨끗한 시설</span>
        </h3>
    </header>
    <section id="bo_v_atc">    	
        <p class="sound_only">본문</p>
        <!-- 본문 내용 시작 { -->
		<div id="bo_v_img">
			<div class="gallery_img">
				<ul class="swiper-wrapper skin_new_s">
										<li class="swiper-slide"><img src="../file/file1.jpg" alt="시설안내 이미지 0"></li>
										<li class="swiper-slide"><img src="../file/file2.jpg" alt="시설안내 이미지 1"></li>
										<li class="swiper-slide"><img src="../file/file3.jpg" alt="시설안내 이미지 2"></li>
										<li class="swiper-slide"><img src="../file/file4.jpg" alt="시설안내 이미지 3"></li>
										<li class="swiper-slide"><img src="../file/file5.jpg" alt="시설안내 이미지 4"></li>
										<li class="swiper-slide"><img src="../file/file6.jpg" alt="시설안내 이미지 5"></li>
									</ul>
            </div>
            <p class="gall_c_txt">
            편안함과 안락함으로 어르신 한분 한분 존중과 배려속에<br />
			품위있는 노후생활로 더욱 행복한 인삼골입니다.
            </p>
			<div class="gallery_thumb">   
                <ul id="bx-pager" class="swiper-wrapper">
                                        
                    <li style="background-image:url(../file/s_file1.jpg)" class="swiper-slide">
                    <a data-slide-index="0" class=""></a>
                    </li>
                                        
                    <li style="background-image:url(../file/s_file2.jpg)" class="swiper-slide">
                    <a data-slide-index="1" class=""></a>
                    </li>
                                        
                    <li style="background-image:url(../file/s_file3.jpg)" class="swiper-slide">
                    <a data-slide-index="2" class=""></a>
                    </li>
                                        
                    <li style="background-image:url(../file/s_file4.jpg)" class="swiper-slide">
                    <a data-slide-index="3" class=""></a>
                    </li>
                                        
                    <li style="background-image:url(../file/s_file5.jpg)" class="swiper-slide">
                    <a data-slide-index="4" class=""></a>
                    </li>
                                        
                    <li style="background-image:url(../file/s_file6.jpg)" class="swiper-slide">
                    <a data-slide-index="5" class=""></a>
                    </li>
                     
                                    </ul>
            </div>
        </div>
        <!-- } 본문 내용 끝 -->
   </section>

    
    <!-- 이전/다음 글 [s] -->
        <!-- 이전/다음 글 [e] -->

    <!-- 버튼 [s] -->
    <div class="btn_area">
                <ul class="left">
                                </ul>
        <ul class="right">
                                </ul>
            </div>
    <!-- 버튼 [e] -->


</article>
<!-- } 게시판 읽기 끝 -->
<script>


var skinslider = $(".skin_new_s").bxSlider({
	mode: 'fade',
	auto: true,
	maxSlides:1,
	speed: 1000,
	pause: 4000,
	slideWidth:1108,
	moveSlides:1,
	slideMargin:0,
	controls:true,
	pagerCustom:"#bx-pager"
});



	$(document).on('click','.gallery_thumb li a',function() {
		skinslider.stopAuto();
		skinslider.startAuto();
	});

</script>
<!-- } 게시글 읽기 끝 -->    	</div><!-- sh_content -->
   
	</div><!-- sh_container_wrapper --> 
</div><!-- sh_container -->
<!-- } 콘텐츠 끝 -->
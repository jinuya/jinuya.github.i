<!-- 콘텐츠 시작 { -->
    <div id="sh_container">
        <div id="sh_container_wrapper">
                        
<div id="sub_bg">
    <div class="tit_area">
        <span>Insamgolew Day Care Center</span>
        <h2>공지사항</h2>
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
        <li class='snb_on' >
        <a href="/page43">공지사항</a>
    </li>
        <li >
        <a href="/page42">자료실</a>
    </li>
    </ul>
<!-- 소분류 끝 --></div>
            </div>
    
            <!-- 콘텐츠영역 -->
            <div id="sh_content">
            
<div id="sh_bo_list">

        
    <div class="list_top">
		        <fieldset id="sh_bo_sch">
            <legend>게시물 검색</legend>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="table43">
            <input type="hidden" name="sca" value="">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <option value="wr_subject">제목</option>
                <option value="wr_content">내용</option>
                <option value="wr_subject||wr_content">제목+내용</option>
                <option value="wr_name,1">글쓴이</option>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="stx" value="" required id="stx" class="sch_input" size="25" maxlength="20">
            <input type="image" src="/img/sh_search.png" alt="검색" name="submit" value="submit" />
            </form>
        </fieldset>        
    </div>

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="table43">
        <input type="hidden" name="sfl" value="">
        <input type="hidden" name="stx" value="">
        <input type="hidden" name="spt" value="">
        <input type="hidden" name="sca" value="">
        <input type="hidden" name="sst" value="wr_num, wr_reply">
        <input type="hidden" name="sod" value="">
        <input type="hidden" name="page" value="1">
        <input type="hidden" name="sw" value="">

        <div id="sh_list_tbl" class="sh_tbl_common">
            <table cellpadding="0" cellspacing="0">
                <caption class="sound_only">공지사항 목록</caption>
                <thead>
                    <tr>
                                                <th scope="col">No</th>
                        <th scope="col">제목</th>
                        <th scope="col">작성자</th>
                        <th scope="col">등록일</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr><td colspan="5" class="empty_table">게시물이 없습니다.</td></tr>                </tbody>
            </table>
        </div>
                
        <div class="btn_area">
            <ul class="adm_btns">
                                                            </ul>
                    </div>

    </form>

</div>


    	</div><!-- sh_content -->
   
	</div><!-- sh_container_wrapper --> 
</div><!-- sh_container -->
<!-- } 콘텐츠 끝 -->
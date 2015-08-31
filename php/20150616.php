<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
	<title>세스코 홈페이지 만들기</title>
<link rel="stylesheet" type="text/css" href="css/cesco.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(function(){


		$(".t_event").click(function(){
			$("#top_event").toggle();
		})


		$(".tab li").hover(function(event){
			 var click_txt = $(event.target).attr("target");
			 $(".tab_content").hide();//전체를 숨기고
			 $("."+click_txt).show();//보여준다.
			 $(".tab li").removeClass("tab-active");
			 $(this).addClass("tab-active");
		});

})
</script>	
</head>
<body>

<div id="wrap">

	 <div id="top_event" style="display:none">
	 
	 </div>

	 <div id="top_broadcast">
	 <a class="t_event" href="#"><h1>세스코의 HOT ISSUE를 지금 확인하세요! </h1></a>
	 </div>


	 <div id="top_menu">

	  <div id="top_logo">
	   <img src="logo.gif">
	  </div>
	  
	  <div id="top_quick_menu">
	   <ul>
	    <a href="#"><li>HOME</li></a>
	    <a href="#"><li>로그인</li></a>
	    <a href="#"><li>회원가입</li></a>
	    <a href="#"><li>ID/PW찾기</li></a>
	    <a href="#"><li><img src="http://www.cesco.co.kr/Common/Image/Front_2014/gnb/top_career02.png"></li></a>
	   </ul>
      </div>
	  <div id="menu">
	     <ul>
	      <a href="#">
	       <li>세스코 
	        <div id="menu_li_first" style="position: absolute;">
		        <div id="menu_li_first_0">
		         <ul> 
			         <li class="menu_li_first_li">세스코 소개</li>
			         <li>회사 소개</li>
			         <li>대표이사 회장</li>
			         <li>대표이사 사장</li>
			         <li>CI</li>
			         <li>오시는 길</li>
			     </ul> 	
			    </div>

			    <div id="menu_li_first_1">
		         <ul> 
			         <li class="menu_li_first_li">세스코 서비스</li>
			         <li>1</li>
			         <li>2</li>
			         <li>3</li>
			         <li>4</li>
			         <li>5</li>
			     </ul> 	
			    </div>

				<div id="menu_li_first_2">
		         <ul> 
			         <li class="menu_li_first_li">세스코 경쟁력</li>
			         <li>1</li>
			         <li>2</li>
			         <li>3</li>
			         <li>4</li>
			         <li>5</li>
			     </ul> 	
			    </div>

			    <div id="menu_li_first_3">
		         <ul> 
			         <li class="menu_li_first_li">세스코 멤버스</li>
			         <li>1</li>
			         <li>2</li>
			         <li>3</li>
			         <li>4</li>
			         <li>5</li>
			     </ul> 	
			    </div>

			    <div id="menu_li_first_4">
		         <ul> 
			         <li class="menu_li_first_li">인재채용</li>
			         <li>1</li>
			         <li>2</li>
			         <li>3</li>
			         <li>4</li>
			         <li>5</li>
			     </ul> 	
			    </div>    
	       </li>
	      </a>	
          <a href="#"><li>서비스 <div id="menu_li_second" style="position: absolute;"></div></li></a>
          <a href="#"><li>고객지원 <div id="menu_li_three" style="position: absolute;"></div></li></a>
          <a href="#"><li>세스코광장 <div id="menu_li_four" style="position: absolute;"></div></li></a>
          <a href="#"><li>MY 세스코 <div id="menu_li_five" style="position: absolute;"></div></li></a>  
	     </ul>
	  </div>

     </div> <!-- top_menu-->
     





     <div id="contents">
      
      <div id="contents_img">
      <img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/main_visual_3.jpg" width="1216" height="427">
      </div>
      
      <div id="contents_icon_area">
       
       <div id="icon_area1">
        <div id="icon_area1_text">처음 방문하셨나요?
        </div>

        <div id="icon_area1_img">
         <ul>
          <li class="area1_img_list1">세스코 가상체험</li>
          <li class="area1_img_list2">놀라운 세스코 이야기</li>
   		  <li class="area1_img_list3">우리집 위생체크</li>
         </ul>
        </div>

        <div id="icon_area1_img2">
          <ul>
          <li class="area1_img2_list1">무료방문상담신청</li>
          <li class="area1_img2_list2">견적상담신청</li>
   		  <li class="area1_img2_list3">즉시계약신청</li>
         </ul>
       </div>
      </div>
      <div id= "icon_area2">
       <div id="icon_area2_text">세스코가 필요한 곳은 어디신가요?</div>
       
       <div id="icon_area2_img">
        <ul>
         <li class="area2_img_list1">가정집</li>
         <li class="area2_img_list2">스토어</li>
         <li class="area2_img_list3">사업체</li>
        </ul>
       </div>
      </div>

      <div id= "icon_area3">
       <div id="icon_area3_text">세스코 회원이신가요?</div>
       <div id="icon_area3_img">
        <ul>
         <li class="area3_img_list1">소독증명서 출력</li>
         <li class="area3_img_list2">서비스 리포트출력</li>
         <li class="area3_img_list3">세스코 가입추천</li>
        </ul>
       </div>
      </div> 

      </div><!--contents_icon_area end-->

      <div id="contents_tab">
	      <h3>세스코 서비스 한 눈에 보기 </h3>

	    <ul class="tab">
			 <li target="tab1">행사사진</li>
			 <li target="tab2">새가족사진</li>
			 <li target="tab3">축복사진</li>
			 <li target="tab4">유소년축구부</li>
		  </ul>

		  <div class="tab_content tab1">
		  행사사진 
		  </div>

		  <div class="tab_content tab2">
		  새가족사진
		  </div>

		  <div class="tab_content tab3">
		  축복사진
		  </div>

		  <div class="tab_content tab4">
		  유소년축구부
		  </div>
      </div> <!--contents_tab end -->
      
      <div id="why_img_btn">
      <a href="#"><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_why.png" width="212"></a>
      </div>

      <div id="cont_banner01">
      <a href="#"><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_banner01.png" width="395px" height="288px"></a>
      </div>

      <div id="cesco_find">

       <div id="icon1">
        <ul id="ceco_find_ul">
         <li><span style="color: black; font-weight: bold;">내게 맞는 세스코 서비스찾기</span></li>
         <li>
          <span style="color: red; font-style: italic; font-size:30px;">step1</span><br>
          <span style="color: blue; font-size:30px;">피해장소</span>
          <span style="color: black; font-size:30px;">를 선택해주세요.</span></li>
         <li>
          <select class="sel" name="allData">
           <option selected="selected">피해장소</option>
           <option value="1">가정집</option>
           <option value="2">요식업및서비스업</option>
           <option value="3">판매및유통업</option>
           <option value="4">학교및교육시설</option>
           <option value="5">의료시설</option>
           <option value="6">제조업</option>
           <option value="7">숙박업</option>
           <option value="8">빌딩및공공기관</option>
          </select>
         </li>
         <li><span style="color: black; font-weight: bold;">에서 서비스가 필요하군요. </span></li>
         <li><span style="line-height: 7;">
          <img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/img_my_cesco_find_step1_on.gif"> 
          <img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/img_my_cesco_find_step2.gif">
          <img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/img_my_cesco_find_step3.gif"> 
          <img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/img_my_cesco_find_step4.gif">
          </span>
         </li>
        </ul>
       </div>



       <div id="icon2">
         <span>피해 장소</span>&nbsp;&nbsp;&nbsp;&nbsp;
         <span> 피해 분야</span>
       </div>

      </div>

      <div id="cont_banner02">
       <a href="#"><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/PC_IndexMain_cf20150527.png" width="212px" height="288px"></a>
      </div>

      <div id="cont_banner03">
       <div id="banner03_area1">
        <ul id="ba_01">
         <li><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div01title.png"></li>
         <li><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div01txt.png"></li>
         <li><span>BEST 이용후기> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>이용후기</span>  
        </ul>

        <ul id="ba_02">
		<img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div01img.png">
        </ul>
       </div>

	   <div id="banner03_area2">
	    <ul id="ba_03">
         <li><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div02title.png"></li>
         <li><img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div02txt.png"></li>
         <li><span>BEST QnA> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>세스코 QnA</span>  
        </ul>

        <ul id="ba_04">
		<img src="http://www.cesco.co.kr/Common/Image/Front_2014/main/cont_div02img.png">
        </ul>
       </div>

      </div>
     
     </div><!--contents end-->

     <div id="footer_notice">
      <ul id="footer-ul">
       <li id="f_li_01">공지사항
       </li>
       <li id="f_li_02">SNE COMPANY 7월 100억매출...비리
       </li>
       <li id="f_li_03">하버드 대학이 말하는 기업 SNECOMPANY 
       </li>
       <li id="f_li_04">2015-06-22
       </li>

       <li> <span><</span> <span>></span>
       </li>
      </ul>
     </div>

     <div id="footer_service">
      <div id="service_area1">
       <ul id="f_s_a_01"><span id="f_s_a_01_title">세스코</span>
        <li>세스코 소개</li>
        <li>세스코 서비스</li>
        <li>세스코 경쟁력</li>
        <li>세스코 멤버스</li>
        <li>인재 채용</li>
       </ul>

       <ul id="f_s_a_02"><span id="f_s_a_01_title">서비스</span>
        <li>세스코 가상체험</li>
        <li>가정집</li>
        <li>요식업 및 서비스업</li>
        <li>판매 및 유통업</li>
        <li>학교 및 교육시설</li>
        <li>의료시설</li>
        <li>제조업</li>
        <li>숙박업</li>
        <li>빌딩 및 공공기관</li>   
       </ul>

       <ul id="f_s_a_03"><span id="f_s_a_01_title">고객지원</span>
        <li>세스코 이용안내</li>
        <li>무료방문신청</li>
        <li>견적상담신청</li>
        <li>즉시계약신청</li>
        <li>세스코가입추천</li>
        <li>FAQ</li>
        <li>Q&A</li>
        <li>고객의소리</li>
       </ul>

       <ul id="f_s_a_04"><span id="f_s_a_01_title">세스코광장</span>
        <li>고객리뷰</li>
        <li>세스코 지식인</li>
        <li>우리집 위생체크</li>
        <li>세스코 홍보</li>
        <li>이벤트</li>
        <li>공지사항</li>
       </ul>

       <ul id="f_s_a_05"><span id="f_s_a_01_title">MY세스코</span> 
        <li>세스코 소개</li>
        <li>세스코 서비스</li>
        <li>세스코 경쟁력</li>
        <li>세스코 멤버스</li>
        <li>인재 채용</li>
       </ul>
      </div>

      <div id="service_area2">
       <div id="service_area2_img_btn01">
       <img src="http://www.cesco.co.kr/Common/Image/Front_2014/common/footer_btn01.png">
       <img src="http://www.cesco.co.kr/Common/Image/Front_2014/common/footer_btn02.png">
       </div>
       <div id="service_area2_img_btn02">
       <img src="http://www.cesco.co.kr/Common/Image/Front_2014/common/footer_btn03.png">
       <img src="http://www.cesco.co.kr/Common/Image/Front_2014/common/footer_btn04.png">
       </div>
      </div>
     </div>
     <div id="copy_right">
      <div id="copy_right_01">
       <span id="copy_rightl_span_01">개인정보취급방침 |</span>
       <span id="copy_rightl_span_02">서비스이용약관 |</span>
       <span id="copy_rightl_span_03">인재채용 |</span>
       <span id="copy_rightl_span_04">고객지원 |</span>
       <span id="copy_rightl_span_05">찾아오시는길</span>
      </div>
      <div id="copy_right_02">
       <img src="http://www.cesco.co.kr/Common/Image/Front_2014/common/text_copyright.gif">
      </div>
     </div>


     
</div><!-- wrap end -->

</body>
</html>
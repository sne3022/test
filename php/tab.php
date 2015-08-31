<html>
<meta charset="utf-8">
<head>
<style>
*{
	margin: 0;
	padding:0;
	box-sizing: border-box;
}


.tab li{
	list-style: none;
	float:left;
	width:10%;
	line-height: 30px;
	height:30px;
	border-bottom: 1px solid black;
	cursor: pointer;
}

li.tab-active{
color:red;
border:1px solid black;
border-bottom: none;

}

li.blank{
	width:70%;
}

.tab_content{
	display:none;
	clear:both;
}

</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(
	function(){
		$(".tab li").click(function(event){
			 var click_txt = $(event.target).attr("target");
			 $(".tab_content").fadeOut(1000);
			 
			 setTimeout(function(){
			 	$("."+click_txt).fadeIn(1000);
			 }, 1000);

			 $(".tab li").removeClass("tab-active");
			 $(this).addClass("tab-active");

		});


})
</script>
</head>
<body>
<ul class="tab">
 <li target="tab1"> tab1
 </li>
 <li target="tab2"> tab2
 </li>
 <li target="tab3"> tab3
 </li>
 <li class="blank">
 </li>
</ul>

<div class="tab_content tab1">
tab_content tab1
</div>

<div class="tab_content tab2">
tab_content tab2
</div>

<div class="tab_content tab3">
tab_content tab3
</div>



<!-- <div class="top">
<ul class="top">
 <li id="tab01" >
 <a class="tab1" name="tab2">탭 1</a>  
 </li>
 <li id="tab02" >
 <a class="tab2" name="tab2">탭 2</a>
 </li>
 <li id="tab03">
 <a class="tab3" name="tab2">탭 3</a>
 </li>
</ul>
</div>

<div class="tab1_txt" style="display:none;">
<h1> 1. 힘찬 하루! </h1>
</div>

<div class="tab2_txt" style="display:none;">
<h1> 2. 철야 근무 예상 </h1>
</div>

<div class="tab3_txt" style="display:none;">
<h1> 3. 졸린 하루군 </h1>
</div> -->
</body>
</html>
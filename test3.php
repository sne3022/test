<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

var count =0;
$(
	function(){ //드래그 예제  grid:바둑판식 움직임 , stop() 멈췄을때 카운트 증가, cursorAt: 드래그 위치 
		/*$(".demo").draggable({ 
			cursor: "crosshair", //커서 표시모양
			cursorAt: {top: 50, left: 50}, 
			grid: [50,50],

			stop: function(){
			count++;
			//$(this).html(count);
			}  
		});*/


		//해당 영역 왔을때 배경색 바꾸기
		$("#parent").droppable({drop: function(event, ui){
			$(this).css("background", "gray");
		}, accept: "#drag" });



	/*	$(".selectable").selectable({
			stop:function(){
				$(".draggable").removeClass("bg-green");
				$(".ui-selected").each(function(index){ //each =foreach 와 비슷 , index 순서
					if(index ==2)
					{
						$(this).addClass("bg-green");
					//	$(this).css("background", "green");
					}

				})
			}
		}); //선택 예제*/
		
		//정렬 함수
		$(".selectable").sortable(); 
		$(".selectable").disableSelection();
})	

</script>
<style type="text/css">
	
.draggable{
	background: white;
	width:150px;
	height:150px;
	border: 1px solid black;
}

#parent{
	width:300px;
	height:300px;
	border: 1px solid black;
}
p{
	width:100px;
	height:30px;
	background: gray;
}

.ui-selecting{
	background: orange;

}

.ui-selected{
	background: red;
}

.bg-red{
background: red;
}

.bg-green{
background: green;
}

</style>
</head>
<body>


<div id="parent">

</div>


 <div class="demo" id="drag">영역
 </div>


 <div class="demo">영역2
 </div> 

 <div class="selectable">
  <div class="draggable" id="drag">영역1
  </div>
  <div class="draggable" id="drag">영역2
  </div>
  <div class="draggable" id="drag">영역3
  </div>
  <div class="draggable" id="drag">영역4
  </div>
  <div class="draggable" id="drag">영역5
  </div>
 </div>


 
</body>
</html>

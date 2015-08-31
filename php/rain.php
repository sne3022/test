<html>
<meta charset="utf-8">
<head>

<style>
.rain{
position: absolute;
border:1px solid black;
}

</style>

<script src="http://code.jquery.com/jquery-latest.js" /></script>
<script>
$(function(){
	$(".rain_start").click(start);
	
});


function start(){
	setInterval(rain, 500); //0.5 초동안 재실행
}

function rain(){
	//Math.floor() 지정된 숫자보다 작거나 같은 최대 정수를 반환합니다.
	$ran_left = Math.floor(Math.random()*$("body").width())+1;
	var shape = $("<div>");
	$(this.shape).addClass("rain");
	$(this.shape).width("1px");
	$(this.shape).height("20px");
	$(this.shape).css("left", $ran_left+"px");
	$("body").append(this.shape);

	$(".rain").animate({top: "+=100%"}, "slow", function(){
		
	});
}
</script>
</head>

<body>
<div class="rain"></div>


<input type="button" class="rain_start" value="start"/>
</body>
</html>
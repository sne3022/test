<html>
<head>
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>

var index=0;

$(
	function(){
		slideInit();
})

function slideInit()
{
	image = $(".slider li").find("img");
	$(".slider").width(image.width());
	$(".slider").height(image.height());
	$(".slider li").css("left", "-100%");
	$(".slider li").eq(index).css("left", "0%"); //eq
	setInterval(slide, 3000);
}


function slide() //넘기기
{

	var next = index +1; //다음 번째

	if(next >= $(".slider li").length) //슬라이드가 끝으로 도달했을때 0으로 초기화.
	{
		next = 0;
	}

	$(".slider li").eq(index).animate({"left": "100%"}, 1000, function(){
		$(this).css("left", "-100%");
	});
	$(".slider li").eq(next).animate({"left": "0%"}, 1000);

	index=next;
}


</script>

<style>

.slider{
position:relative;
margin-left:500px;
overflow: hidden;

}

.slider li{
position: absolute;
}

</style>
</head>
<body>
<ul class="slider">
 <li>
 <img src="human.JPG" width="300px" height="300px">
 </li>
 <li>
 <img src="human2.JPG" width="300px" height="300px">
 </li>
 <li>
 <img src="man.JPG" width="300px" height="300px">
 </li>
</ul>
</body>
</html>
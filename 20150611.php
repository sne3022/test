<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

	$(function(){
		$("li").click(function(){ //li- 클릭시 체크박스 표시
			
		})

	})
</script>

<style type="text/css">

*{
	margin: 0;
	padding: 0;
	list-style: none;
}
li{
	cursor: pointer;
	position: relative;
	display:inline-block;
	width:100px;

}

img{
	width:100px;
	height:100px;
}
img:hover{
	border:1px solid blue;
}
.check_box{
	position: absolute;
	left:0;
	top:0;
}	

</style>
</head>
<body>

<div>
	<ul>
		<li>
		     <span><img src="main.JPG" width="100px" height="100px"></span>
		     <span><input type="checkbox" name="check_box" class="check_box"/></span>
		</li>
	</ul>
</div>
</body>
</html>
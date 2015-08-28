<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
.bar{
	width:100%;
	height:10px;
	background: green;
	opacity: 0;	
}	
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(
	function(){
		$(".btn").click(add);
})

function add()
{
	$(".bar").animate({opacity:1},2000, function(){
				$(".bar").css("display", "none");
	});
}
</script>
</head>
<body>
<div class="bar">
</div>
<input type="button" class="btn" value="click">
</body>
</html>
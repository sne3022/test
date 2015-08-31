<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="button.js"></script>
<script type="text/javascript">

$(
	function()
	{
		multibox = new multibox();
		multibox.init($("body"));
		
	}
)	

</script>


<style type="text/css">
.ui-button{
background: #66f;
color: white;
height:30px;
border-radius: 5px;
outline: none;
border: none;
box-shadow: 2px 2px 3px #66f;
}

.sourcepannel{
	border:1px solid black;
}	

.targetpannel{
	border:1px solid black;
}

.selectpannel{
	border:1px solid blue;
}

.selectpannel li{
	list-style: none;
	border:1px solid white;
}
.selectpannel li:hover{
	border:1px solid red;
}

</style>
</head>
<body>
<!-- add :<input type="text" class="addclass"/>
remove :<input type="text" class="removeclass"/> -->
<div class="output"> </div>
</body>
</html>
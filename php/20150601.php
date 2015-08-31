<!DOCTYPE html>
<html>
<head>

	<title>연습</title>
<style type="text/css">
input[type=button]{
	background-color: #99f;
	background-image: linear-gradient(#33f,#99f); 
	color:white;
	font-size: 15px;
	padding:5px 10px;
	border:none; 
	box-shadow: 2px 2px 3px #99f; //박스 그림자
	border-radius: 5px;  //둥근 모서리
	outline: none;
}

input[type=button]:hover{ 
background: #77f;
}

input[type=button]:active{
background: #33f;
outline: none;
}

input[type=text], textarea, select{
height:25px;
border-radius: 5px;
border:1px solid #99f;
box-shadow: 1px 1px 3px #99f;
color:#777;
font-size: 15px;
}

input[type=text]:focus, textarea:focus, select:focus{
outline:none;
border:1px solid #f99;
box-shadow: 2px 2px 3px #f99;
}



</style>
</head>
<body>
<input type="button" name="btn" class="btn" value="button"><br><br>
<input type="text" ><br><br>
<textarea ></textarea><br><br>
<select>
<option> 1</option>	
<option> 2</option>	
<option> 3</option>	
</select>
</body>
</html>
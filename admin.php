<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
<style type="text/css">
*{
	margin: 0;
	padding:0;
	list-style: none;
	font-family: "나눔바른고딕";
}
#wrap{
	margin-top: 40px;
	width: 1000px;
	margin: auto;
	position: relative;
	background: white;
}
.contents{
	width:500px;
	height:500px;
	margin:auto;
	background: #f7f7f7;
	border-radius: 2px;
	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.top{
	width: 500px;
	margin: auto;
	text-align: center;
}
.logo{
	margin-top: 20px;
	margin-bottom: 10px;
	background: #5ea5e7;
}
.login{
	text-align: center;
}

.login ul li{
	line-height: 4;

}
.admin{
	font-size: 40px;
}

.email, .password{
	width:250px;
	height:43px;
}
.login_btn{

	font-size:20px;
	margin-top: 20px;
	width:254px;
	height:43px;
	color:white;
	background-color: #357ae8;
	border: 1px solid #2f5bb7;
}

</style>
</head>
<body>
	<div id="wrap">
		<div class="top">
			<div class="logo"><img src="logo.jpg"></div>
		</div>
		<div class="contents">
			  <div class="login">
			    <form>
			  	<ul>
			  		<li><span class="admin">관리자</span></li>
			  		<li><input class="email" type="text" name="email">
			  		</li>
			  		<li><input class ="password" type="password" name="password">
			  		</li>
			  		<li><input class ="login_btn" type="button" value="로그인">
			  		</li>
			  	</ul>
			  	</form>
			  </div>
		</div>
	</div>
</body>
</html>
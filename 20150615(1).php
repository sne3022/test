<!DOCTYPE html>
<html>
<head>
<style type="text/css">

*{
	box-sizing: border-box;
	margin: 0;
	padding:0;
}
a:link {text-decoration: none; color: #333333;}
a:visited {text-decoration: none; color: #333333;}
a:active {text-decoration: none; color: #333333;}
a:hover {text-decoration: underline; color: #333333;}

body{
	background: #0769AD;
}

.left{
	float:left;
	width:33%;
	min-height:100%;
	background: #EFF;
	padding:40px;
	border-bottom-left-radius:2em;
	box-shadow: -2px 2px 3px #999;

}

.left li{
	clear:both;
	line-height: 30px;
	margin-left:60px;
}

.number1{
	margin-left: 40px;
}
.right{
	padding-left:50px;
	float:right;
	width:67%;
	min-height:100%;
	background: #BFF;
	border-bottom-right-radius:2em;
	box-shadow: 2px 2px 3px #999;
}

.nav{
	width:100%;
	height:40px;
	background: #0769AD;
	border-top-left-radius: 2em;
	border-top-right-radius: 2em;
	background: #06568E;
}

.nav li{
	margin-left:70px;
	line-height: 18px;
	padding:10px;
	cursor: pointer;
	list-style: none;
	float:left;
	color:white;
	font-weight: bold;
	border:1px solid #0769AD;
}
.nav li:hover{
 border:1px solid white;
}

#wrap{
	clear: both;
	width: 90%;
	margin: auto;
	height: 100%;
}

#global{
	width:100%;
	height: 34px;
	background: #333;

}

#global_left{
	margin-left:5%;
}

#global_right{
	margin-right:5%;
}

#global_left li{
	float:left;
	line-height:34px; 
	color:white;
	list-style: none;
	min-width: 5%;
	padding:0 0.5%;
	border-left:1px solid white;
	text-align: center;
}



#global_right li{
	float:right;
	line-height:34px; 
	color:white;
	list-style: none;
	min-width: 5%;
	padding:0 0.5%;

	border-left:1px solid white;
	text-align: center;
}

#global_top{
	clear: both;
	width:90%;
	margin:auto;
	font-size:30px;
	padding-top:20px;

}

#global_top_left{
	line-height:100px; 
	vertical-align: middle;
	float:left;
}

#global_top_right{
	vertical-align: middle;
	float:right;
}
.global_top_right_img{
	margin-top:10px;
}

html, body{
height:100%;
}


</style>
</head>
<body>
<div id ="global">

    <ul id="global_left">
     <li>A</li>
     <li>B</li>
     <li>C</li>
     <li>D</li>
     <li>E</li>
    </ul>

	<ul id="global_right">
	 <a href="#"><li>Plugins</li></a>
	 <a href="#"><li>Contribute</li></a>
	 <a href="#"><li>Events</li></a>
	 <a href="#"><li>Support</li></a>
	 <a href="#"><li>JQuery Foundation</li></a>
	</ul>
</div>

<div id ="global_top">
 <div id="global_top_left">
 <h1>JQUERY</h1>
 </div>

 <div id= "global_top_right">
 <img class="global_top_right_img" src="http://static.adzerk.net/Advertisers/bc85dff2b3dc44ddb9650e1659b1ad1e.png">
 </div>
</div>


<div id="wrap">
	<div class="nav">
	 <ul>
	  <li>Download</li>
	  <li>API Documentation</li>
	  <li>Blog</li>
	  <li>Plugins</li>
	  <li>Browser Support</li>
	 </ul>
	</div>


	<div class="left">
	 <ul>
	  <a href="#"><li class="number1">Ajax</li></a>
	  <a href="#"><li>Global Ajax Event Handlers</li></a>
	  <a href="#"><li>Helper Functions</li></a>
	  <a href="#"><li>Low-Level Interface</li></a>
	  <a href="#"><li>Shorthand Methods</li></a>
	 </ul>
	</div>

	<div class="right">
	<h1 class="api">jQuery API</h1>
	jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. If you're new to jQuery, we recommend that you check out the jQuery Learning Center.

	If you're updating to a newer version of jQuery, be sure to read the release notes published on our blog. If you're coming from a version prior 1.9, you should check out the 1.9 Upgrade Guide as well.
	</div>
</div>
<div>d</div>
</body>
</html>
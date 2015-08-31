<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
	<title></title>
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.flexslider.js"></script>

<script type="text/javascript"> 
var isShowing = false;

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

</head>
<body>
  <div class="flexslider">
	  <ul class="slides">
	    <li><img src="1.jpg" width:100% /></li>
	    <li><img src="2.jpg" width:100% /></li>
	  </ul>
  </div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
 $(".btn").click(function(){
   $(".test").addClass("rotate90");
   $(".test2").addClass("rotate0");
 });
 
 $(".reset").click(function(){
   $(".test").removeClass("test1");
 });
})
</script>
<style> 


.test, .test2{
width: 300px;
height: 100px;
border: 1px solid black;
transition:all 1s;
position:absolute;
margin:50px;
}


.test2{
transform: rotateX(90deg);
}

.rotate0{
transform: rotateX(0deg);
}

.rotate90{
transform: rotateX(-90deg);
}
</style>
</head>
<body>
<input type="button" class="btn" value="click">
<input type="button" class="reset" value="reset">
<div class="test">
hihihihihihi
</div>

<div class="test2">
hellohello
</div>


</body>
</html>

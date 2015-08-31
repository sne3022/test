<!DOCTYPE html>
<html>
<head>



<script src="http://code.jquery.com/jquery-latest.js"></script>

<style type="text/css">

#div1{
width:200px;
height:200px;
border: 1px solid black;
}

#div2{
width:200px;
height:200px;
border: 1px solid black;
}

.square{
position:absolute;
border: 1px solid red;
}

</style>
<script>
$(
   function(){
   $("#rec").click(createsquare); 
});

function createsquare() //사각형 만들기
{ 
 width = $("._width").val();  //가로
 height = $("._height").val(); //세로
 shape = $("<div>"); //태그 생성

 square1 = new square(width, height, shape); //사각형 객체 생성
 square1.draggable();
}

function square(width, height, shape)
{
this.width = width;
this.height =height;
this.shape = shape;
}

square.prototype={
dragstart:false,
 draggable:function(){
  this.init(); 
 },
 init:function(){
 $(this.shape).addClass("square");
 $(this.shape).mousedown(this, this.startmove);
 $(this.shape).mouseup(this, this.endmove);
 $(this.shape).mousemove(this, this.moving);
 $(this.shape).width(this.width);
 $(this.shape).height(this.height);
 $("body").append(this.shape);
 },

 startmove:function(e){
  e.data.dragstart=true;
 },

 endmove:function(e){
  e.data.dragstart=false;


 },

 moving:function(e){
                                                              
 if(e.data.dragstart==true)
 {
  $(e.target).css({
 // top:e.pageY-$(e.target).height()/2 + "px",
  //left:e.pageX-$(e.target).width()/2 + "px"
  top:e.pageY-$(e.target).height()/2 + "px",
  left:e.pageX-$(e.target).width()/2 + "px"
  });
 }
 
 
 }
}

/*function a(){
 this.x=100;

}
*/
function a(data) //이름없는 개체(익명) :오브젝트
{
//	alert(data.x);
}

a({ //{오브젝트}
x:100
});


/*
a1 = new a();
a1.func();
b = new a1.func();
alert(b.x);
c = new b.func2();
alert(c.x);*/

a.prototype={
	y:200
}

//a1 = new a();
//alert(a1.y);


</script>
</head>
<body>

<div id="div1">
</div>

<div id="div2">
</div>

<div>
width: <input type="text" name="_width" class="_width">
height: <input type="text" name="_height" class="_height"> <br/>
<input type="button" id="rec" value="click"/>
</div>

</body>
</html>

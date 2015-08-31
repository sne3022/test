<html>
<head>
<title></title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
/* select 예제 */
var img_path;
var count=0;
var img_info=[];

$(
	function(){
	


		$.ajax({ 
			url : "process.php", //어디 요청할것 인가? 
	        method : "post",
	        data : "" //{}:오브젝트 
		}).done(function(data){ // 요청 끝나고 응답(data)을 여기에 받는곳
			data = JSON.parse(data); 
			index = data;

			for(index in data)
			{	

				newimg = $("<img>");
				newimg[0].filename = data[index].file_name;
				newimg[0].filepath = data[index].file_path;
				newimg[0].filedate = data[index].file_copy_date;
				
				newimg.addClass("draggable");
				newimg.attr("value",count);
				newimg.attr("src", "http://localhost/sneboard/"+data[index].file_path+"/"+data[index].file_origin_name);
				img_info[count]= data[index].file_name;
				img_info[count]+=data[index].file_path;
				img_info[count]+=data[index].file_data;
				$("#area1").append(newimg);
				//alert(index);
				count++;
			}

			$(".draggable").draggable();
		})


		$("#area2" ).droppable({ 
			drop:function(event, ui){
			    area2 = ui.draggable.detach(); //detach()붙이다
			    $(area2).css("left", 0);
			    $(area2).css("top", 0);
				$(this).append(area2);


			//	$("#area3").html(area2[0].filename+", "+area2[0].filepath+", "+area2[0].filedate);
				
			}
		});

		$(".btn").click(function(){
			//$("#area2").selectable();
			$( "#area2" ).selectable({
				stop:function(){

					data ="";
					data2 ="";
					$(".ui-selected").each(function(){
						 data += this.filename;


						 //data2 +=area2[0].filename+", "+area2[0].filepath+", "+area2[0].filedate;
					});
					alert(data);
					//$("#area4").html(data);
				}
					
			})
		});
		
})
	
</script>
<style type="text/css">
li{
	list-style: none;
	margin: 0;
	padding: 0;
}

img{
	width:150px;
	height:100px;
}


#area2{
	width:500px;
	height:500px;
	border: 1px solid black;
}

 #area2 .ui-selecting { background: #FECA40; }
 #area2 .ui-selected { background: #F39814; color: white; border: 1px solid blue;}
 #area2 { list-style-type: none; margin: 0; padding: 0; width: 60%; }
 #area2 li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }

</style>

</head>
<body>

<div id="area1">
<!--  <img class="draggable" src="main.JPG" >
 <img class="draggable" src="main2.JPG">
 <img class="draggable" src="main3.JPG">
 <img class="draggable" src="notice.JPG"> -->
</div>
<br><br>
<div id ="area2">




</div>
<div id="area3"></div> 

<div id="area4"></div>
<input type="button" class="btn" value="button">

</body>
</html>
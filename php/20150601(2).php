
 <html>
 <head>
 	<title></title>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
$(
	function()
	{
		$("input[type=button]").button().click(buttonclick);
		$("#date-picker_from, #date-picker_to").datepicker();
        $("#date-picker_from, #date-picker_to").datepicker( "option", "dateFormat", "yy-mm-dd");
    }
	
)

function buttonclick()
{
	from =$("#date-picker_from").val();
	to =$("#date-picker_to").val();
	

	$.ajax({ 
		url : "dbdate.php", //어디 요청할것 인가? 
        method : "post",
        data :{date1: from, date2: to}
	}).done(function(data){ // 요청 끝나고 응답(data)을 여기에 받는곳
		alert(data);
		data = JSON.parse(data); 
		index = data;
		newdiv = $("<div>");
		for(index in data)
		{
			html ="idx:"+data[index].board_idx+",";
			html +="title:"+data[index].board_title+",";
			html +="postdate:"+data[index].board_postdate+"<br>";
			newdiv.append(html);
		}
		$("body").append(newdiv);
	})
	
}	
</script>

 </head>
 <body>
 <input type="button" value="button">
 from <input type="text" id="date-picker_from">
 to <input type="text" id="date-picker_to">


 </body>
 </html>



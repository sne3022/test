<!DOCTYPE html>
<html>
<head>
	<title>Ajax 예제</title>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(
	function(){
		$(".ajaxbtn").click(getData);

})

function getData()
{


	$.ajax({ 
		url : "process.php", //어디 요청할것 인가? 
        method : "post",
        data : {id : 1} //{}:오브젝트 
	}).done(function(data){ // 요청 끝나고 응답(data)을 여기에 받는곳
		data = JSON.parse(data); 

		index = data;
		table = $("<table>");
		for(index in data)
		{
			newtr = $("<tr>");
			indextd = $("<td>");
			titletd = $("<td>");
			indextd.html(data[index].board_idx);
			titletd.html(data[index].board_title);
			newtr.append(indextd).append(titletd);
			table.append(newtr);
		}
		$("body").append(table);

	})

}


</script>
</head>
<body>
<div id="text">
</div>
<input type="button" class="ajaxbtn" value="ajaxbtn">
</body>
</html>
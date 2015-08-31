<html>
<meta charset="utf-8">
<head>
<style>


label input {
    position:absolute;
    width:0;
    height:0;
    overflow:hidden;
}

#box1, #box2{
width:500px;
height:150px;
border: 1px solid #EEE;
text-align: center;
background-color: #EBEBEB;
}

#box2{
}
</style>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(
	function(){
		$( ".file" ).change(function(){
			$("#box2").css("display", "");
  			$("#text_input").append($(".file").val()+"<br/>");
  		});
    }
);

function file_check(){

}
</script>
</head>
<body>

<div id="box1">
 <p>여기에 파일을 끌어 놓거나 파일 첨부를 클릭하세요.</p>
    <label>
        파일 첨부
        <input type="file" class="file" >
    </label>
      
 <p>파일 크기 제한 : <span class="allowed_filesize">0MB</span> 
  <span>(허용 확장자 : <span class="allowed_filetypes">*.*</span>)</span>
 </p>
 <p class="progress_status" style="display:none;">파일 업로드 중... 
  (<span class="xefu-progress-percent">0%</span>)
 </p>
</div>

<div id ="box2" style="display: none;">
<table>
<tr>
 <td id="text_input">
  
</td>
</tr>
</table>

</div>
</body>
</html>
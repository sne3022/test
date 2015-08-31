<html>
<head>
<script src ="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script>
$(
	function(){

		var editor = CKEDITOR.replace( 'editor1', {
		uiColor: '#14B8C4',
		//allowedContent:'p ul li'
		});
		editor.setData( '<ul> <li>1</li><li>2</li><li>3</li> </ul>');
		CKEDITOR.appendTo( 'editor2',{ 
	
		},'Editor content to be used.')

		CKEDITOR.on( 'instanceReady', function( ev ) {
	// Show the editor name and description in the browser status bar.
		document.getElementById( 'eMessage' ).innerHTML = 'Instance <code>' + ev.editor.name + '<\/code> loaded.';

	// Show this sample buttons.
		document.getElementById( 'eButtons' ).style.display = 'block';
		});

});

var editor, html ="";

/*
function createEditor(){
	if(editor) //존재하면 리턴
		return;

	var config = {};
	editor = CKEDITOR.appendTo('editor', config, html); //appendTo(tartget, 설정배열, 들어갈 내용)
}

function removeEditor(){

	if(!editor)
		return;
    //getData() ->사용자가 작성한 글 내용을 가져온다.
	document.getElementById('editorcontents').innerHTML = html = editor.getData();
	document.getElementById('contents').style.display ="";
	editor.destroy();
	editor = null;
}	*/


function InsertHTML(){

	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById('htmlArea').value;
	editor.insertHtml(value);
}

function SetContents(){

	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById('htmlArea').value;
	editor.setData(value);
}

function GetContents(){

	var editor = CKEDITOR.instances.editor1;
	alert(editor.getData());
}

function Focus(){
	CKEDITOR.instances.editor1.focus();
}

</script>

</head>
<body>


<input onclick="Focus();" type="button" value="Focus">
<br>
<br>
<input onclick="InsertHTML();" type="button" value="Insert HTML">
<input onclick="SetContents();" type="button" value="Set Editor Contents">
<input onclick="GetContents();" type="button" value="Get Editor Contents (HTML)">

<textarea cols="100" id="htmlArea" rows="3">
<img src="http://snecompany.com/public/images/main/logo.png">
&lt;h2&gt;Test&lt;/h2&gt;&lt;p&gt;This is some &lt;a href="/Test1.html"&gt;sample&lt;/a&gt; 
HTML code.&lt;/p&gt;
</textarea>


<!-- <input onclick="createEditor()"; type="button" value="create editor">
<input onclick="removeEditor()"; type="button" value="remove editor">
<div id="editor">

</div>

<div id="contents">
 <div id="editorcontents">
 </div>
</div> -->

<!-- <div id="editor2"></div> -->

<!-- <div contentEditable = "true" > </div><br/><br/> -->
<textarea class="ckeditor" name="ckeditor" id="editor1"> 
<h2>Test</h2><p>This is some <a href="/Test1.html">sample</a> HTML code.</p>
</textarea>

<input type="file" name="file">

</body>
</html>
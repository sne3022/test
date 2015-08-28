<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#dialog2" ).dialog({width:"300" ,height:"500"});
  });
  </script>
<style type="text/css">
.search{
  background: blue;
  width: 100%;
  height:50px;
  line-height:50px;
}
.chat_list{
  background: yellow;
  width: 100%;
  height:50px;
  line-height:50px;
}

.friend_list{
  background: green;
  width: 100%;
  height:300px;
  line-height:300px;
  text-align: center;
}
</style>
</head>
<body>
 
<!-- <div id="dd" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div> -->
 
<div id="dialog2" title="채팅">
 <div class="search">친구검색</div>
 <div class="chat_list">대화 리스트</div>
 <div class="friend_list">친구 리스트</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="code.jquery.com/jquery-latest.js">
<script type="text/javascript"> 
$(function()
{
  $("li.drop").bind("mouseover mouseneter", showMenu);
  $("li.drop").bind("mouseout mouseleave", hideMenu);
  $(".dropdownContain").bind("mouseover mouseenter", showContain);
  $(".dropdownContain").bind("mouseout mouseleave", hideContain);
});


function showMenu(event)
{
  var target = event.target;
  $(target).next(".dropdownContain").data("isShowing", "true");

  if(!$(target).next(".dropdownContain").is(':animated'))
  {
    $(target).next(".dropdownContain").stop().slideDown(200);
  }
}

function hideMenu(event)
{
  var target = $(event.target).next(".dropdownContain")
  $(target).data("isShowing", "false");
  setTimeout(function(){hide(target);}, 300);
}

function showContain(event)
{
  $(event.currentTarget).data("isShowing", "true");
}


function hideContain(event)
{
 isShowing = false;
 var target = event.currentTarget;
 $(target).data("isShowing", "false");
 setTimeout(function(){hide(target);}, 300);

}

function hide(target)
{
  if($(target).data("isShowing") == "false")
  {
    $(target).stop().slideUp(200);
  }
}
</script>	
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" href="{{url('js/tree/themes/default/style.min.css')}}" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="{{url('js/tree/jstree.min.js')}}"></script>
<script>
$(
	function(){
			// ajax demo
			$('#jstree').jstree({
				'core' : {
					'data' : {
						"url" : "{{url('file')}}",
						"dataType" : "json", // needed only if you do not supply JSON headers,
					},

				}
			});
})
</script>
</head>
<body>
<div id="jstree">

</div>
</body>
</html>
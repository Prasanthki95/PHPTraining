<!DOCTYPE html>
<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
	div{
		background:#98bf21;
		height:100px;
		width:100px;
		position:absolute;
	}

</style>

</head>
<body>

<button>Start Animation</button>


<div id = "div"></div>

<script> 

	$(document).ready(function(){

	  $("button").click(function(){
	    $("div").animate({left: '250px'});
	  });
	  
	});

</script> 

</body>

</html>


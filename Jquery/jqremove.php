<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<style>
	/*	#head{
			display:none;
		}
	*/
	</style>
</head>

<body>
	<h1>JQuery Remov</h1>
	
	<button>CLick Me</button>
	
	<h2 id="head">Heading with head id</h2>
	
	<div id="div1">
	
		<h2 id="head">Heading Effect</h2>
		
		<p>This is a paragraph with little content.</p>
	
	</div>
	
	<h2 class="head">Heading with head class</h2>
	
	<script>
		$(document).ready(function(){
		
			$("button").click(
				function(){
					
					// $("#div1").remove();
					
					// $("#div1").empty();	
					
					
					// $("h2").remove("#head");	
					
					$("h2").remove("#head, .head");	
					
				}
			)
		})
		
	</script>
</body>

</html>

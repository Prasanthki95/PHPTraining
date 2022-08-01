<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

<p>I will disappear.</p>


<button id="hide">Hide</button>

<button id="show">Show</button>

<button id="toggle">Toggle</button>

<script>

	$(document).ready(function(){
	
		$("#hide").click(function(){
			$("p").hide("slow",function(){
		    alert("The paragraph is now hidden");
		  });
		})

		
		$("#show").click(function(){
			$("p").show("slow",function(){
		    alert("The paragraph is now shown");
		  });
		})

/*		
		$("#toggle").click(function(){
			$("p").toggle();
		})
		
*/		
	})

</script>

</body>

</html>

<!DOCTYPE html>

<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<p display="hidden">I will disappear.</p>

<button id="fadeOut">FadeOut</button>

<button id="fadeIn">FadeIn</button>

<button id="fadetoggle">FadeToggle</button>

<button id="fadeto">FadeTo</button>

<script>

	$(document).ready(function(){
		
		$("#fadeOut").click(
			function(){
				$("p").fadeOut();
			}
		)
		
		$("#fadeIn").click(
			function(){
				$("p").fadeIn();
			}
		)
		$("#fadetoggle").click(
			function(){
				$("p").fadeToggle();
			}
		)
		
		$("#fadeto").click(
			function(){
				$("p").fadeTo("slow",0.5);
			}
		)
	})

</script>

</body>

</html>

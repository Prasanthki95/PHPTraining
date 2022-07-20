<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<style>
		.color{
			background-color:"yellow";
			color:"red";
			font-size:3rem;
		}
	</style>
</head>

<body>

	<h1 id=heading><a>Hello Heading 1</a></h1>
	
	<h2>Hello <b>Heading 2</b></h2>
	
	<p class="color"> This is the paragraph.</p>
	
	<div>
		<p>This is the paragraph.</p>
	</div>
	
	<input value="This is text input" class="input"/>
	
	<button>Click Me!</button>
	
	<script>
	
	/*
		
		$(document).ready(function(){
			$("button").click(function(){
				$('p').addClass("color");	
			
			})
		}
		
		)
		
	
	
		$(document).ready(function(){
			$("button").click(function(){
				$('p').removeClass("color");	
			
			})
		}
		
		)	
		
	*/	
	
	
		$(document).ready(function(){
			$("button").click(function(){
				$('div p').toggleClass("color");	
			
			})
		}
		
		)
	
		
	</script>

</body>

</html>

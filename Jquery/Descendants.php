<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<style>
		.color{
			background-color:"yellow";
			color:"red";
			font-size:3rem;
		}
		
		#div1 {
		  height: 500px;
		  width: 800px;
		  padding: 10px;
		  margin: 3px;
		  border: 1px solid blue;
		  background-color: lightblue;
		}
	</style>
</head>

<body>

	<h1 id=heading><a>Jquery Descendants</a></h1>
	
	
	<p class="color"> This is the paragraph.</p>
	
	<div id="div1">
		<div class="div2">
			<h2>Hello <b>Heading 2</b></h2>
		</div>
		
		<p>This is the paragraph.</p>
	</div>
	
	<!--
	
	<input value="This is text input" class="input"/>
	
	<button>Click Me!</button>
	
	-->
	
	<script>
	/*
	
		$(document).ready(function(){
			$(".div2").children().css({"fontSize":"4rem"});
		})
	
	*/	
	
	/*
	
		$(document).ready(function(){
			$("div").children("div .div2").css({"fontSize":"4rem"});
		})
		
	*/
	
	/*
		$(document).ready(function(){
			$("#div1").find("p").css({"fontSize":"4rem"});
		})
		
	*/
		
			
		$(document).ready(function(){
			$("#div1").find("*").css({"fontSize":"4rem"});
		})
			
		
	</script>

</body>

</html>

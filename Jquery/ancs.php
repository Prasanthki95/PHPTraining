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
		  height: 100px;
		  width: 300px;
		  padding: 10px;
		  margin: 3px;
		  border: 1px solid blue;
		  background-color: lightblue;
		}
	</style>
</head>

<body>

	<h1 id=heading><a>Jquery Ancestors</a></h1>
	
	
	<p class="color"> This is the paragraph.</p>
	
	<div id="div1">
		<div>
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
			$("h2").parent().css({"color":"blue"});
		})
	*/
	
	/*	
		$(document).ready(function(){
			$("p").parent().css({"color":"blue"});
		})
	
		
		$(document).ready(function(){
			$("h2").parents().css({"color":"blue"});
		})
	
	*/	
	
	/*
		$(document).ready(function(){
			$("h2").parents("div").css({"color":"blue"});
		})
		
	*/
	
		$(document).ready(function(){
			$("h2").parentsUntil("#div").css({"color":"blue"});
		})
	
		
		
	</script>

</body>

</html>

<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<style>
	/*
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
	/		
	</style>
</head>

<body style="font-size:2rem">

	<h1 id=heading><a>Jquery Sibling</a></h1>
	
	
	<p class="color"> This is the paragraph.</p>
	
	<div id="div1">
		<div class="div2">
			<h2>Hello <b>Heading 2</b></h2>
		</div>
		
		<p>This is the paragraph 1 inside div</p>
		
		<p>This is the paragraph 2 inside div</p>
	</div>
	
	<p class="color"> This is the paragraph 2</p>
	
	<p> This is the last Line.</p>
	
	<!--
	
	<input value="This is text input" class="input"/>
	
	<button>Click Me!</button>
	
	-->
	
	<script>
	
	/*
	
		$(document).ready(function(){
			$("div p").first().css({"color":"red"});
		})
	
	
	
		$(document).ready(function(){
			$("p").first().css({"color":"red"});
		})
		
		
	
		$(document).ready(function(){
			$("p").last().css({"color":"red"});
		})
		
	
	
		$(document).ready(function(){
			$("p").eq(1).css({"color":"red"});
		})
		
		$(document).ready(function(){
			$("div p").eq(1).css({"color":"red"});
		})
	
	
	
		$(document).ready(function(){
			$("p").filter("p.color").css({"color":"red"});
		})
	
	*/
		
		$(document).ready(function(){
			$("p").not("p.color").css({"color":"red"});
		})
		
	</script>

</body>

</html>

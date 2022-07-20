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

	<h1 id=heading><a>Hello Heading 1</a></h1>
	
	<h2>Hello <b>Heading 2</b></h2>
	
	<p class="color"> This is the paragraph.</p>
	
	<div id="div1">
		<p>This is the paragraph.</p>
	</div>
	
	<input value="This is text input" class="input"/>
	
	<button>Click Me!</button>
	
	<script>
	
	/*
		$(document).ready(function(){
			$("button").click(function(){
				$('div p').css("background-color", "yellow");	
			
			})
		}
		
		)
		
		
		
		$(document).ready(function(){
			$("button").click(function(){
				$('div p').css({"background-color": "yellow","font-weight":"bold"});	
			
			})
		}
		
		)
	
	
	
		$(document).ready(function(){
		  $("button").click(function(){
		    var txt = "";
		    txt += "Width of div: " + $("#div1").width() + "</br>";
		    txt += "Height of div: " + $("#div1").height();
		    $("#div1").html(txt);
		  });
		});
	
	
	
		$(document).ready(function(){
		  $("button").click(function(){
		    var txt = "";
		    txt += "Width of div: " + $("#div1").innerWidth() + "</br>";
		    txt += "Height of div: " + $("#div1").innerHeight();
		    $("#div1").html(txt);
		  });
		});
		
		
		$(document).ready(function(){
		  $("button").click(function(){
		    var txt = "";
		    txt += "Width of div: " + $("#div1").outerWidth() + "</br>";
		    txt += "Height of div: " + $("#div1").outerHeight();
		    $("#div1").html(txt);
		  });
		});
		
		
		
		$("button").click(function(){
		  var txt = "";
		  txt += "Outer width (margin): " + $("#div1").outerWidth(true) + "</br>";
		  txt += "Outer height (margin): " + $("#div1").outerHeight(true);
		  $("#div1").html(txt);
		}); 
		
	*/	
		
		
		$("button").click(function(){
		  var txt = "";
		  txt += "Document width/height: " + $(document).width();
		  txt += "x" + $(document).height() + "\n";
		  txt += "Window width/height: " + $(window).width();
		  txt += "x" + $(window).height();
		  //alert(txt);
		  $("#div1").html(txt);
		}); 
		
	</script>

</body>

</html>

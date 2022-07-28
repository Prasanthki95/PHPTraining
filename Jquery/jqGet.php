<htmL>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

	<p id="demo"></p>
	
	<button>Click Me</button>

	<script>
	
	/*
		$(document).ready(function(){
		
		  $("button").click(function(){
		    $.get("text.txt", function(data, status){
		      alert("Data: " + data + "\nStatus: " + status);
		    });
		  });
		  
		});
		
	*/	
		$(document).ready(function(){
		 
		 	$.get("text.txt",function(data,status){
		 		$("#demo").text(data);
		 	})
		 
		});
	
	</script>
</body>

<html>

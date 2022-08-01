<!DOCTYPE html>

<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>

<p id="p1">jQuery is fun!!</p>

<button>Click me</button>


<script>

	$(document).ready(function(){
	/*

	  $("button").click(function(){
	    $("#p1").load("txt.txt");
	  });
	  
*/  	

	  $("button").click(function(){
	    $.get("txt.txt",function(data,status){
	    	alert("The data is : "+data+" and the status :" +status);
	    	
	    	$("#p1").text(data);
	    })
	  });
	  
	
	

/*	
	
	$("button").click(function(){
	    $.post("resp.php",{"data":"Hello"},function(data,status){
	    	alert("The data is : "+data+" and the status :" +status);
	    })
	  });
*/ 	
	
	});

</script>

</body>

</html>


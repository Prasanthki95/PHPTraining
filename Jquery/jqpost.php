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
		    $.post("postres.php", 
		    {
		    	name:"Prasanth",
		    	desc:"sdfsadfasf"
		    }
		    
//		    ,function(data, status){
//		      alert("Data: " + data + "\nStatus: " + status);
//		    });

		    ,function(data, status){
		      //alert("Data: " + data + "\nStatus: " + status);
		      
		      $("#demo").html(data);
		    });			
			
		  });
		  
		});
		
*/	
		$(document).ready(function(){
		 
		 	 $.post("postres.php", 
			    {
			    	name:"Prasanth",
			    	desc:"sdfsadfasf"
			    }
			    
			    ,function(data, status){
			      // alert("Data: " + data + "\nStatus: " + status);
			      
			      $("#demo").text(data);
			      
			    });
		 
		});
	
	</script>
</body>

<html>

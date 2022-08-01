<!DOCTYPE html>

<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style> 

#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  /*display: none;*/
}

</style>
</head>

<body>
 
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!</div>

<script> 

	$(document).ready(function(){
	
	/*
	
	  $("#flip").click(function(){
	    $("#panel").slideDown("slow");
	  });
	  
	
	 
	 $("#flip").click(function(){
	    $("#panel").slideUp("slow");
	  });
	  
	  */ 
	  
	  $("#flip").click(function(){
	    $("#panel").slideToggle("slow");
	  });
	  
	});

</script>

</body>

</html>


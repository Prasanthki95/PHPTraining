<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<style>
	/*	#head{
			display:none;
		}
	*/
	</style>
</head>

<body>
	<h1>JQuery func Stop</h1>
	
	<button>Stop</button>
	
	<h2 id="head">Click here to Start</h2>
	
	<div style="background:#98bfff;height:100px;width:100px;position:absolute;"></div>
	
	<script>
		$(document).ready(function(){
		
		/*	$("#head").click(function(){
				$("#head").hide("slow");
			})
			
			$("button").click(function(){
				$("#head").stop();
			})
		
			
		/*	$("button").click(function(){
				$("#head").show();
			})
			
			$("button").click(function(){
				$("#head").stop();
			})
		
		*/
		
		//	$("button").click(function(){
		//		$("#head").toggle();
		//	})
		
		//	$("button").click(function(){
		//		$("#head").stop();
		//	})
		
		/*	$("#head").click(function(){
				$("#head").slideUp(5000);
			})
			
			$("button").click(function(){
				$("#head").stop();
			})
			
		*/
			$("#head").click(function(){
				$("div").animate({
					    left: '250px',
					    height: '+=150px',
					    width: '+=150px'
				},"slow");
			});
			
			$("button").click(function(){
				$("div").stop();
			})
		
				
		
		})
	
	</script>
</body>

</html>

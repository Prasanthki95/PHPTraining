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
	<h1>JQuery Animate</h1>
	
	<button>CLick Me</button>
	
	<h2 id="head">Heading Effect</h2>
	
	<div style="background:#98bfff;height:100px;width:100px;position:absolute;"></div>
	
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				// $("div").animate({background: '#fff'});
				
				/* $("div").animate({
				    left: '250px',
				    opacity: '0.5',
				    height: '150px',
				    width: '150px'
				  });
				
				*/
				
				//$("div").animate({
				//    height: 'toggle'
				//});	
				
				$("div").animate({
				    left: '250px',
				    height: '+=150px',
				    width: '+=150px'
				  });
			});
			
			 
		
		/*	$("button").click(function(){
				  var div = $("div");
				  div.animate({height: '400px', opacity: '0.4'}, "slow");
				  div.animate({width: '400px', opacity: '0.8'}, "slow");
				  div.animate({height: '200px', opacity: '0.4'}, "slow");
				  div.animate({width: '200px', opacity: '0.8'}, "slow");
			}); 
			
		*/		
			
		/*	$("button").click(function(){
			
				$("div").animate({fontSize: '3em'}, "slow");
		
			}
		*/
		
		
		})
	
	</script>
</body>

</html>

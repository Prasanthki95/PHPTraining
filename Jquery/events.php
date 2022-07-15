<html>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<h1>JQuery Events</h1>
	
	<h2 id="head">Heading</h2>
	
	<p>Hello, world !</p>
	
	<p class="para">Paragraph with class</p>
	
	<script>
		$(document).ready(function(){
		
			$("h1").click(()=>alert("Heading clicked"));
			
			// $("#head").click(()=>alert("Id Heading clicked"));
			
			// $(".para").click(()=>alert("class para clicked"));
			
			
			//$("p.para").click(()=>$("p.para").hide());
			
			//$("p.para").dblclick(()=>$("p.para").hide());
			
			//$("p").click(()=>$("p.para").show());
			
			
			//$("p").mouseover(()=>$("p.para").show());
			
			// $("#head").mouseup(function(){
			//  alert("Mouse up over Head!");
			// });
			
			// $("#head").hover(function(){
			//  alert("You entered head!");
			// },
			// function(){
			//  alert("Bye! You now leave head!");
			// });
			
			$("p").on({
			    mouseenter: function(){
			      $(this).css("background-color", "lightgray");
			    },  
			    mouseleave: function(){
			      $(this).css("background-color", "lightblue");
			    }, 
			    click: function(){
			      $(this).css("background-color", "yellow");
			    }  
  			});

		})
	
	</script>
</body>

</html>

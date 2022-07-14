<html>

<body>

	<div id="msg">Hello World</div>
	<br>
	<button onclick="loaddata()">Click the Button</button>
	
	<script>
	
		function loaddata(){
		
			var xml = new XMLHttpRequest();
			
			xml.onload = function(){
				if(this.readyState==4 && this.status==200){
					document.getElementById("msg").innerText = this.responseText;
				}
			}
			
			xml.open("GET","res.txt",true);
			xml.send();
		}
	</script>

</body>

</html>

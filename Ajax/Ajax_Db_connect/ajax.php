<html>

<body>

	
	<br>
<!--	<button onclick="loaddata()">Click the Button</button> -->
	
	<script>
	
		function loaddata(str){
		
			if (str == "") {
			    document.getElementById("msg").innerHTML = "";
			    return;
			  } else {
			    var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
				document.getElementById("msg").innerHTML = this.responseText;
			      }
			    };
			    xmlhttp.open("GET","phpconnect.php?q="+str,true);
			    xmlhttp.send();
			  }
		}
	</script>
	
	<form>
	<select name="users" onchange="loaddata(this.value)">
	  <option value="">Select a person:</option>
	  <option value="2">Prasanth</option>
	  <option value="3">Dhanush</option>
	  <option value="4">Ashwin</option>
	  <option value="5">Steve</option>
	  </select>
	</form>
	<br>
	<div id="msg"><b>Person info will be listed here...</b></div>

</body>

</html>

<html>

<head>
	<style>
		
		body{
			
			width:100%;
			height:90vh;
		}
		form{
			width:200px;
			
		}
		
		.Error-red{
			color:red;
		}
		
	</style>	
	
</head>

<body>

	<?php
		$name="";
		$email=$phone="";
		$nameErr= "";
		$emailErr=$phoneErr="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["name"])){
				$nameErr = "Name not be empty";
			}
			elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
				$nameErr = "Name only contains letters and number";
			}
			else{
				$name = test($_POST["name"]);
			}
			if(empty($_POST["email"])){
				
				$emailErr = "Email not be empty";
			}
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailErr = "Invalid Email";
			}
			else{
				$email = test($_POST["email"]);
			}	
			if(empty($_POST["phno"])){
				$phoneErr = "Phone not be empty";
			}
			else{
				$phone = test($_POST["phno"]);
			}
		}
		
		function test($data){
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}
		
	?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<label for="name">Name:</label>
	<input name="name" type="text"/><span class="Error-red"><?php echo $nameErr; ?></span>
	<br>
	<br>
	<label for="email">Email:</label>
	<input name="email" type="text"/><span class="Error-red"><?php echo $emailErr; ?></span>
	<br>
	<br>
	<label for="phno">Phone:</label>
	<input name="phno" type="number"/><span class="Error-red"><?php echo $phoneErr; ?></span>
	<br>
	<br>
	
	<input type="submit" value="Submit"/>	
</form>
<div>

<?php
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p> your email address is $email</p>");
         echo "<p> your phone number is $phone</p>";
   
?>
</div>

</body>
</html>
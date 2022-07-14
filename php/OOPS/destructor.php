<html>

<body>
	<h1>destructor</h1>
	
	<?php
		
		class Person{
			
			public $name;
			
			public $age; 
			
			function __construct($name,$age){
				$this->name = $name;
				$this->age = $age;
			}
			
			function __destruct(){
				echo "Name is $this->name and Age is $this->age.";
				echo "<br/>";
			}
		}
		
		$Person1 = new Person('Prasanth',24);
		
			
		
		$Person2 = new Person('Steve',"30");

	?>
	
</body>

</html>

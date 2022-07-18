<html>

<body>

	<h1>Inheritance</h1>
	
	<?php
		class Person{
			public $name;
			public $age;
		
			function __construct($name,$age){
				$this->name = $name;
				$this->age = $age;
			}
			function details(){
				echo "Name is. $this->name and age is. $this->age";
			}
		}
		
		class details extends Person{
			function msg(){
				echo "Hello";
			}
		}
		
		$pers = new details("Pers","25");
		
		$pers->msg();
		
		echo "<br>";
		
		$pers->details();
	?>

</body>

</html>

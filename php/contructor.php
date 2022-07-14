<html>

<body>
	<h1>Constructor</h1>
	
	<?php
		
		class Person{
			
			public $name;
			
			public $age; 
			
			function __construct($name,$age){
				$this->name = $name;
				$this->age = $age;
			}
			
			function get_name(){
				return $this->name;
			}
			
			
			function get_age(){
				return $this->age;
			}
		}
		
		$Person1 = new Person('Prasanth',24);
		
		echo "Name : ". $Person1->get_name();	
		echo "Age : ". $Person1->get_age();
		
		echo "<br/>";
		
		$Person2 = new Person('Steve',"30");

		echo "Name : ". $Person2->get_name();	
		echo "Age : ". $Person2->get_age();
		
	?>
	
</body>

</html>

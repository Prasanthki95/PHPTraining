<html>

<body>
	<h1>Class & Object</h1>
	
	<?php
		
		class Person{
			
			public $name;
			
			public $age; 
			
			function set_name($name){
				$this->name = $name;
			}
			
			function get_name(){
				return $this->name;
			}
			
			function set_age($age){
				$this->age = $age;
			}
			
			function get_age(){
				return $this->age;
			}
		}
		
		$Person1 = new Person();
		
		$Person1->set_name('Prasanth');
		$Person1->set_age(24);
		echo "Name : ". $Person1->get_name();	
		echo "Age : ". $Person1->get_age();
		
		echo "<br/>";
		
		$Person2 = new Person();
		
		$Person2->set_name('Steve');
		$Person2->set_age(30);
		echo "Name : ". $Person2->get_name();	
		echo "Age : ". $Person2->get_age();
		
	?>
	
</body>

</html>

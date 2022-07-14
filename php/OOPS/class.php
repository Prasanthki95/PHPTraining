<html>

<body>
	<h1>Class</h1>
	
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
		}	
		
	?>
	
</body>

</html>

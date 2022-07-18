<html>

<body>

<h1>Access Modifier</h1>

<?php
	class Details{
		public $name;
		public $age;
		public $weight;
		
		function set_name($name){
			$this->name = $name;
		}
		
		protected function set_age($age){
			$this->age = $age;
		}
		
		private function set_weight($weight){
			$this->weight = $weight;
		}
		
		function get_name(){
			return $this->name;
		}
		
		function get_age(){
			return $this->age;
		}
		
		function get_weight(){
			return $this->weight;
		}
	
	}
	
	$detail = new Details();
	
	$detail->set_name("Person");
	
	$detail->set_age("28");
	
	$detail->set_weight("80");
	
	echo $detail->get_name();
	
	echo $detail->get_age();
	
	echo $detail->get_();
?>

</body>

</html>

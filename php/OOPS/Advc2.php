<html>

<body>
	<?php
	/*
		class Name{
			public function name(){
				echo "Hello from public function";
			}
			protected function name1(){
				echo "Hello from protected function";
			}
			private function name2(){
				echo "Hello from private function";
			}
		}
		
		$obj = new Name();
		
		$obj.name();	
		
		$obj.name1();
		
		$obj.name2();
		
	*/	
	
	/*
	
		class Name{
			public function name(){
				echo "Hello from public function";
			}
			protected function name1(){
				echo "Hello from protected function";
			}
			private function name2(){
				echo "Hello from private function";
			}
		}
		
		class detail extends Name{
		
			function call(){
				$this->name1();
			}
		}
		
		$obj = new detail();
		
		$obj->name();	
		
		$obj->call();
		
		//$obj->name2();
		
	*/
	
	/*
		class Name{
		//	function name(){
		//		echo "Hello from public function";
		//	}
			function name1(){
				echo "Hello from protected function";
			}
			function name2(){
				echo "Hello from private function";
			}
		}
		
		class detail extends Name{
		
		//	function call(){
		//		$this->name1();
		//	}
			
			function name1(){
				echo "Hello from child class";
			}
		}
		
		$obj = new detail();
		
		$obj->name1();	
		
		// $obj->call();
		
		//$obj->name2();
	
	*/	
	
		class Name{
		//	function name(){
		//		echo "Hello from public function";
		//	}
			function loop(){
				for($i=0;$i<5;$i++){
					echo "Looping $i";
					echo "<br>";
				}
			}
		}
		
//		class detail extends Name{
		
		//	function call(){
		//		$this->name1();
		//	}
			
//			function name1(){
//				echo "Hello from child class";
//			}
//		}
		
		$obj = new Name();
		
		// $obj->name1();	
		
		// $obj->call();
		
		//$obj->name2();
		
		$obj->loop();	
		
	?>

</body>


</htmL>

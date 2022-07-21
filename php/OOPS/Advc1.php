<html>

<body>
	<?php
		function func1(){
		
			// echo "Hello word";
			
		/*	for($i=0;$i<5;$i++){
				echo "Number is $i";
				echo "<br>";
			}
		*/	
		/*
			$j=0;
			while($j<5){
				echo "Number is $j";
				echo "<br>";
				$j++;
			}
		*/
		
		/*
		
		$colors = array("red", "green", "blue", "yellow"); 
		
		foreach($colors as $value)
			echo "Color is : $value <br>";
			echo "<br>";
		}
		*/
		
		/*	
			$var = "Prasanth";
			
			if($var=="Prasanth"){
				echo "The name is $var";
			}
			else{
				echo "The name is different";
			}
		*/
		
		/*
			
			$var = "Vigaas";
			
			if($var=="Prasanth"){
				echo "The name is $var";
			}
			else if($var=="Vigaas"){
				echo "The name is $var";
			}
			else{
				echo "The name is different";
			}
		
		*/
		
		
		/*	
			$check = "Tito";
			
			switch ($check){
				case "Prasanth":
					echo "Name is Prasanth";
					break;
				case "Vigaas":
					echo "Name is Vigaas";	
					break;
				case "Tito":
					echo "Name is Tito";
					break;
				default:
					echo "No name";	
			}
		
		*/
		
		$colors = array("first"=>"red","second"=> "green","Third"=> "blue","fourth"=> "yellow"); 
		
		foreach($colors as $key=>$value){
			echo "Key is $key and value is $value";
			echo "<br>";
		}
				
		}
			
		func1();	
	?>

</body>


</htmL>

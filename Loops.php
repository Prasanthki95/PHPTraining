<html>

<body>

<?php
	$array = array(1,2,3,4,5);

	for($i=0;$i<count($array);$i++){
		echo "$i";
	}
	
	$j=0;
	while($j<5){
		echo "$j";
		$j++;
	}
	
	foreach($array as $value){
		echo "$value";
	}	

?>

</body>

</html>
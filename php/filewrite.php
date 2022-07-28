<html>

<body>

<?php

/*

	$file = "text.txt";
	
	$fl = fopen($file,'w') or die("Unable to open file!");
	
	//$res = fread($fl,filesize($file));
	
	$txt = "Welcomes you";
	
	fwrite($fl,$txt);
	
	
	//echo "Result : $res";
	
	fclose($fl);
	


	$file = "txt2.txt";
	
	$fl = fopen($file,'w') or die("Unable to open file!");
	
	$txt = "Hello from write mode";
	
	fwrite($f1,$txt);
	
	fclose($f1);	

*/

	$file = "txt2.txt";
	
	$fl = fopen($file,'w') or die("Unable to open file!");
	
	$txt = "Hello from write mode";
	
	fwrite($f1,"Hello from write mode");
	
	fclose($f1);		
	
?>

</body>
</html>

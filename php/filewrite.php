<html>

<body>

<?php

	$file = "text.txt";
	
	$fl = fopen($file,'w') or die("Unable to open file!");
	
	//$res = fread($fl,filesize($file));
	
	$txt = "Welcomes you";
	
	fwrite($fl,$txt);
	
	
	//echo "Result : $res";
	
	fclose($fl);

?>

</body>
</html>

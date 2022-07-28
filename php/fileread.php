<html>

<body>

<?php

/*

	$file = "text.txt";
	
	$fl = fopen($file,'r');
	
	$res = fread($fl,filesize($file));
	
	echo "Result : $res";
	
	fclose($fl);
	
*/	

	$file1 = "txt2.txt";
	
	$file = fopen($file1,'r');
	
	$res = fread($file,filesize($file1));
	
	echo "Result is $res";
	
	fclose($file);

?>

</body>
</html>

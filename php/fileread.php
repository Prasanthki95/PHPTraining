<html>

<body>

<?php

	$file = "text.txt";
	
	$fl = fopen($file,'r');
	
	$res = fread($fl,filesize($file));
	
	echo "Result : $res";
	
	fclose($fl);

?>

</body>
</html>

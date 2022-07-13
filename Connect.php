<?php
	
$servername = "localhost";
$username = "i95dev";
$password = "12345";

$connection = mysqli_connect($servername,$username,$password);

if(mysqli_connect_errno()){
	echo "Connection Failed";
}else{
	echo "Connection Success!";
}
?
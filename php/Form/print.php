<?php
/*
$firstname = "";
$lastname = "";
$Email = "";
$Password = "";

*/
class Advc3
{


}

function fun()
{

    // echo $_POST['firstname'];

}

$val = $_POST['q'];

//$firstname = $_POST['firstname'];

//$lastname = $_POST['lastname'];

//$email = $_POST['email'];

//$password = $_POST['password'];

/*

/*
echo $firstname;
echo "<br/>";

echo $lastname;
echo "<br/>";

echo $email;
echo "<br/>";

echo $password;
echo "<br/>";
*/
echo $val;

$conn = mysqli_connect("localhost","i95dev","i95dev","Mysql_test");

$query = "Insert into phpformdata(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";

$sql = "CREATE TABLE phpformdata (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

mysqli_query($conn,$sql);

if(mysqli_query($conn,$query)){
    echo "<h2>Data added to database</h2>";
}else{
    echo mysqli_error($conn);
    // echo  mysqli_connect_error($conn);
}

mysqli_close($conn);


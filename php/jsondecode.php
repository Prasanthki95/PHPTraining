<!DOCTYPE html>

<html>

<body>

<?php

$age = '{"Peter":35,"Ben":37,"Joe":43}';


$cars = array("Volvo", "BMW", "Toyota");
 
// echo json_decode($age);

 
// var_dump(json_decode($age));

// var_dump(json_decode($age,true));


// echo json_decode($cars);

// var_dump(json_decode($cars));

$obj = json_decode($age);

foreach($obj as $key => $value) {

  echo $key . " => " . $value . "<br>";
}

?>

</body>

</html>

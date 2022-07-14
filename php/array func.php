<html>

<body>

<?php

$cars = array("Volvo", "BMW", "Toyota");

sort($cars);

rsort($cars);

$costs = array("Volvo"=>"20L", "BMW"=>"60L", "Toyota"=>"40L");

asort($costs);

ksort($costs);

arsort($costs);

krsort($costs);

?>

</body>
</html>
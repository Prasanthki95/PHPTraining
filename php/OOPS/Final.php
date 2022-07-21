<html>

<body>

<h1>Final Keyword</h1>

<?php

/*
class Person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    final function det(){
        echo "function called from parent class";
    }
}

class details extends Person{
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
   function detail(){
       echo "function called from the child class";
       $this->det();
    }
}

$pers = new details();

//$pers->msg();

echo "<br>";

$pers->det();
?>

*/

final class Person{
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    final function det(){
        echo "function called from parent class";
    }
}

class details extends Person{
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
   function detail(){
       echo "function called from the child class";
       $this->det();
    }
}

$pers = new details();

//$pers->msg();

echo "<br>";

$pers->detail();

?>

</body>

</html>

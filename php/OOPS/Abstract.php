<html>

<body>

<h1>Abstract</h1>

<?php

abstract class Shirt{
    public $name;
    public function __construct($color){
        $this->color = $color;
    }
    abstract public function color();

}

class Shirt1 extends Shirt{
    public function color(){
        return "The shirt1 color is $this->color";
    }
}

class Shirt2 extends Shirt{
    public function color(){
        return "The shirt2 color is $this->color";
    }
}

$shirt1 = new Shirt1("red");

echo $shirt1->color();

echo "<br/>";

$shirt2 = new Shirt2("blue");

echo $shirt2->color();

?>

</body>

</html>

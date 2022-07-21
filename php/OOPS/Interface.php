<html>

<body>

<h1>Interface</h1>

<?php

interface Shirt{
    public function color();
}

class Shirt1 implements Shirt{
    public function color(){
        return "The shirt1 color is red";
    }
}

class Shirt2 implements Shirt{
    public function color(){
        return "The shirt2 color is blue";
    }
}

$shirt1 = new Shirt1();

echo $shirt1->color();

echo "<br/>";

$shirt2 = new Shirt2();

echo $shirt2->color();

?>

</body>

</html>

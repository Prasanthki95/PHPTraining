<html>

<body>

<h1>Static method and properties</h1>

<?php

/*

class Hello{
    public static function welcome(){
        echo "Hello world";
    }
}

//$obj = new Hello();

Hello::welcome();

*/

/*

class Hello{

    public static function welcome(){
        return "Hello world";
    }
}

class child extends Hello{
    public $value;
    public function __construct(){
        $this->value = parent::welcome();
    }

    public function msg(){
        echo "Hello $this->value";
    }

}

$obj = new child();

//Hello::welcome();

$obj->msg();



class pi {
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;



class pi {
    public static $value = ;
}

// Get static property
echo pi::$value;

*/

class pi {
    public static $value = 3.14159;
    public function Value() {
        return self::$value;
    }
}

// Get static property

$pi = new pi();
echo $pi->Value();

?>


</body>

</html>

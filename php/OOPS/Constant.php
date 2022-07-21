<html>

<body>

<h1>Constants</h1>

<?php
    class msg{
        const MSG = "Hello world";

        const NAME = "Prasanth";

        const AGE = "35";
    }

    $val = new msg();

    echo $val::MSG;

    echo "<br>";

    echo $val::NAME;

    echo "<br>";

    echo $val::AGE;

?>

</body>

</html>

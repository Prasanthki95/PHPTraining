<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advc3</title>
</head>
<body>

        <form method="Post" onsubmit="data(this.value)">
            <label>First-Name :</label>
            <input name="firstname" type="text" value=""/>
            <label>Last-Name :</label>
            <input name="lastname" type="text" value=""/>
            <label>Email :</label>
            <input name="email" type="email" value=""/>
            <label>Password :</label>
            <input name="password" type="password" value=""/>
            <input type="submit" value="SUBMIT">
        </form>

        <script>

            function data(str){
                let xmlhttp = XMLHttpRequest();

                xmlhttp.open("POST","print.php",true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("q="+str);
            }

        </script>
</body>
</html>

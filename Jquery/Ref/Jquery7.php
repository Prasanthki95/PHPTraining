<!DOCTYPE html>

<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>

<p id="p1">jQuery is fun!!</p>

<button>Click me</button>


<script>

$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css({"color":"blue","font-size":"2rem"}).slideUp(2000).slideDown(2000);
  });
});

</script>

</body>

</html>


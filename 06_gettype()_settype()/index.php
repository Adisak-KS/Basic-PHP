<?php 
   $price = 50; // integer
   $score = 90.58; //doble /float
   $name = "Adisak"; // string
   $isvalid = false; //boolean

   $price += 100; // 50 +100 => price

   echo $name ."<br>";
   echo $isvalid ."<br>";
   echo $price ."<br>";
   echo $score ."<br>";

   echo "<hr>";
   echo gettype($name)."<br>";
   echo gettype($isvalid) ."<br>";
   echo gettype($score) ."<br>";
   echo gettype($price) ."<br>";

   echo "<hr>";
   echo "Before : ", gettype($score) ."<br>";
   settype($score, "integer");
   echo "After : ", gettype($score) ."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>gettype(), settype()</title>
</head>
<body>

</body>
</html>
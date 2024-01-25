<?php
   // $score = 100;
   // $score = $score + 200;
   // echo $score;

   define("score", 100);
   // score = score + 200; // ไม่ได้
   $total = 200 + score;
   echo score ."<br>";
   echo $total;
   echo "<hr>";

   define("PI", 3.14);
   $radius = 6;
   $area = PI * 6*6;

   echo "Circle Area : ". $area ." Square Metre";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Constant </title>
</head>

<body>

</body>

</html>
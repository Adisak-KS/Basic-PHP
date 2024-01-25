<?php
// $price = "100";
// $dalivery = 50;

// $total = $price + $dalivery;

// // echo gettype($total) ;
// // echo $total

// Double to Integer ////////

$price = "100.17";
$dalivery = 50.99;

$total = $price + $dalivery;

echo "Before : " . gettype($total) . "<br>";
echo $total . "<br>";

// Type Casting
$total = (int)$total;
echo "After : " . gettype($total) . "<br>";
echo $total . "<br>";
echo "<hr>";

////////////////////////////////
$sum = "400.89";
echo "Before : " . gettype($sum) . "<br>";
echo $sum . "<br>";
$sum = (double) $sum;
echo "After : " . gettype($sum) . "<br>";
echo $sum . "<br>";
echo "<hr>";

$a = (integer)10.9;
$b = (integer)20.5;

$c = $a +$b;
echo $c;



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Type Casting</title>
</head>

<body>

</body>

</html>
<?php

// Global
$x = 100;
$y = 10;

function showNumber()
{
  global $x;
  $GLOBALS ["z"] = 5000;
   // Local
  print("Variable x  : " . $x ."<br>");
}

showNumber();
print("Variable x : " . $x ."<br>");
print("Variable z : " . $z ."<br>");
// ต้อง Error
// print("แสดงตัวแปร Z: " . $z);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ขอบเขตตัวแปร</title>
</head>

<body>

</body>

</html>
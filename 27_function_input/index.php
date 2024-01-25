<?php

  // Create Function
  function show($message){
    print("<b>Hello " .$message. "</b>");
    print("<br>");
    print("<hr>");
  }

  function add($number1, $number2, $number3){
    $result = $number1 + $number2 + $number3;
    print($number1 . " + " .$number2. " + " .$number3 ." = ". $result);
    print("<br>");
    print("<hr>");
  }

  //เรียกใช้ Function
    show("Adisak");
    show("PHP");

    $x = 10;
    $y = 20;
    $z = 50;
    add($x, $y, $z);
    add(100, 200, 300);
    add(1000, 5000, 200);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function แบบรับค่า</title>
</head>

<body>
 
</body>

</html>
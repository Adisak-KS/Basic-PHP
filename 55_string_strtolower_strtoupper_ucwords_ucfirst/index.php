<?php

    $str1 = "hello world I love Php";

    $lower = strtolower($str1); //ทำเป็นพิมพ์เล็กทั้งหมด
    echo $lower ."<br>";
    echo "<hr>";

    $upper = strtoupper($str1); //ทำเป็นพิมพ์ใหญ๋ทั้งหมด
    echo $upper ."<br>";
    echo "<hr>";

    $wordUc = ucwords($str1); //   ตัวแรกของแต่ละคำเป็นพิมพ์ใหญ๋
    echo $wordUc ."<br>";
    echo "<hr>";

    $wordFirst = ucfirst($str1); //   ตัวแรกทำเป็นพิมพ์ใหญ๋
    echo $wordFirst ."<br>";
    echo "<hr>"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเปลี่ยนรูปแบบตัวอักษร String</title>
</head>

<body>

</body>

</html>
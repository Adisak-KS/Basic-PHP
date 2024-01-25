<?php

    $str1 = " adisak Khongsuk ";
    $str2 = "adisak";
   
    echo $str1;
    echo "<br>";

    $count = strlen($str1); // ความยาวของข้อความใน $str1
    echo "ความยาวข้อความ = ". $count;
    echo "<hr>";

    $result = trim($str1); // ตัดซ้าย-ขวา
    echo "ความยาวข้อความหลังตัด = ". strlen($result);
    echo "<hr>";


    $result = ltrim($str1); // ตัดซ้าย
    echo "ความยาวข้อความหลังตัดด้านซ้าย R = ". strlen($result);
    echo "<hr>";

    $result = rtrim($str1); // ตัดขวา
    echo "ความยาวข้อความหลังตัดด้านซ้าย L = ". strlen($result);
    echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การตัดช่องว่าง String</title>
</head>

<body>

</body>

</html>
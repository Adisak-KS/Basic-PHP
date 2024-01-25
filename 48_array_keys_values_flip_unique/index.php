<?php

    // แบบเดี่ยว
    $number = [10, 20, 15, 20, 30, 10, 20];

    // แบบคู่
    $colors = ["red" => "สีแดง", "yellow" => "สีเหลือง", "green" => "สีเขียว"];

    $colors_keys = array_keys($colors); //ดึง Key

    $colors_value = array_values($colors); // ดึง Value
    /*
    print_r($colors_keys);
    print ("<br>");

    print_r($colors_value);
    print ("<br>");
    */
    /*
    print_r($colors);
    print ("<br>");
    $result = array_flip($colors); //เอา key เป็น Value และเอา Value เป็น Key
    print_r($result);
    print ("<br>")
    */

    print_r($number);
    print ("<br>");
    $result = array_unique($number);
    print_r($result);
    print ("<br>")


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function เกี่ยวกับ index และ Value ใน Array</title>
</head>

<body>

</body>

</html>
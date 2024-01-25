<?php
    
    $fruits = ["Papaya", "Guava", "Lemon", "Durian"];

    print_r($fruits);
    print "<br>";

    // เพิ่มสมาชิกต่อจากตัวท้ายสุด
    array_push($fruits, "Mango");
    print_r($fruits);
    print "<br>";

    array_push($fruits, "Mangosteen");
    print_r($fruits);
    print "<br>";
    print "<hr>";

    // ลบสมาชิกตัวท้าย
    print_r($fruits);
    print "<br>";

    array_pop($fruits);
    print_r($fruits);
    print "<br>";
    print "<hr>";


    // เพิ่มสมาชิกในตำแหน่งแรก
    $fruits = ["Papaya", "Guava", "Lemon", "Durian"];
    print_r($fruits);
    print "<br>";

    array_unshift($fruits, "Mangosteen");
    print_r($fruits);
    print "<br>";
    print "<hr>";

    // ลบสมาชิกในตำแหน่งแรก
    print_r($fruits);
    print "<br>";
    array_shift($fruits);
    print_r($fruits);
    print "<br>"

    

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function เพิ่มและลบสมาชิกใน Array</title>
</head>
<body>
    
</body>
</html>
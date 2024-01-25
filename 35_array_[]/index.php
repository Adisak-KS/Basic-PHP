<?php
    // ใช้ [] 

    // แบบจับคู่ Key => Value
    $room =["A01" => "Somying", "A02" => "Sommai", "A03" => "Sompong"];

    // Sompong
    print_r($room);
    print "<br>";
    print($room["A01"]);
    print "<hr>";

    ///////////////////////////////
    $animal = ["dog" => "Dog", "cat" => "Cat", "pig" => "Pig"];
    print_r($animal);
    print "<br>";
    print($animal["dog"]);
    print "<hr>";

    ///////////////////////////////
    $products = ["Banana" => 50, "Bag" => 5000, "Table" => 450];
    print_r($products);
    print "<br>";
    print($products["Bag"]);
    print "<hr>";
    
    ///////////////////////
    $number = [10, 20, 30];
    print_r($number);
    print "<hr>";

    ///////////////////////
    $colors = ["Yellow" => "สีเหลือง", "Red" => "สีแดง"];
    print_r($colors);
    print "<br>";
    print($colors["Red"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> การสร้างอาร์เรย์ (Array) ด้วย []</title>
</head>
<body>
    
</body>
</html>
<?php
    
    //แบบเดี่ยว
    $number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30,];
    $fruits = ["Orange", "Papaya", "Apple", "Banana", "Jackfruit", "Custard apple","Banana", "Grape", "Watermelon"];

    foreach($fruits as $fruit){
        print($fruit ."<br>");

    }
    print("<hr>");

    foreach($number as $i){
        print($i ."<br>");

    }
    print("<hr>");

    //แบบคู่
    $colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
    $animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];

    foreach($colors as $en => $th){
        print ($en ." คำแปล ". $th ."<br>");
    }
    print("<hr>");
    
    foreach($animals as $key => $value){
        print ($key ." => ". $value ."<br>");
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> เข้าถึง Array ด้วย ForEach</title>
</head>
<body>
    
</body>
</html>
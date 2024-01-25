<?php
    
    //แบบเดี่ยว
    $number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30,];
    $fruit = ["Orange", "Papaya", "Apple", "Banana", "Jackfruit", "Custard apple","Banana", "Grape", "Watermelon"];

    /*
    print($fruit[0] ."<br>");
    print($fruit[1] ."<br>");
    print($fruit[2] ."<br>");
    print($fruit[3] ."<br>");
    print($fruit[4] ."<br>");
    print($fruit[5] ."<br>");
    */


    $total = count($fruit);
    print("จำนวนสมาชิกมีค่า = " .$total ."<br>");

    for($index = 0; $index < $total; $index++){
        print("ตำแหน่ง : ".$index ." => " .$fruit[$index] ."<br>");

    }

    //จำนวณข้อมูลซ้ำ
    print_r(array_count_values($number));

   
    //แบบคู่
    $colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
    $animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];



?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> เข้าถึง Array ด้วย For Loop</title>
</head>
<body>
    
</body>
</html>
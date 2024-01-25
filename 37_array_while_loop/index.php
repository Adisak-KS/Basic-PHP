<?php
    
    //แบบเดี่ยว
    $number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30,];
    $fruit = ["Orange", "Papaya", "Apple", "Banana", "Jackfruit", "Custard apple","Banana", "Grape", "Watermelon"];

    //จำนวณข้อมูลซ้ำ
    //print_r(array_count_values($number));
   

    //แบบคู่
    $colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
    $animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];


    /* 
    each เลิกใช้แล้วใน PHP 7.2 โดยการใช้ foreach คือวิธีที่แนะนำมากที่สุดในการวนลูปผ่าน associative array ใน PHP ในปัจจุบัน.
    while($item = each($colors)){
        print($item["key"]);

    }
    */

    foreach($colors as $key => $val) {
        print($key."=>".$val."<br>");
      }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> เข้าถึง Array ด้วย While Loop</title>
</head>
<body>
    
</body>
</html>
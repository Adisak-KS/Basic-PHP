<?php
    
    //แบบเดี่ยว
    $number = [10, 20, 30, 10, 20, 30, 40, 10, 20, 30,];
    $fruit = ["Orange", "Papaya", "Apple", "Banana", "Jackfruit", "Custard apple","Banana", "Grape", "Watermelon"];

    //จำนวณข้อมูลซ้ำ
    //print_r(array_count_values($number));
   

    //แบบคู่
    $colors = ["yellow" => "สีเหลือง", "red" => "สีแดง", "orange" => "สีส้ม"];
    $animals = ["dog" => "สุนัข", "cat" => "แมว", "pig" => "หมู", "rabbit" => "กระต่าย"];

    /* เลิกใช้ Function Each แล้ว ควรใช้ Foreach    แทน
    while(list($key, $value) = each($animals)){
        print ("Key = " .$key. "Value = " .$value ."<br>");
    }
    */

    foreach ($animals as $key => $value){
        print ("Key = ". $key ." Value = " .$value ."<br>");
    }
    print "<hr>";

    foreach ($colors as $en => $th){
        print ("คำศัพท์ : ". $en ." คำแปล : " .$th ."<br>");
    }
    



?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> เข้าถึง Array ด้วยฟังก์ชั่น List</title>
</head>
<body>
    
</body>
</html>
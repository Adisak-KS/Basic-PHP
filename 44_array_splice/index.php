<?php
    
    $fruits = ["Papaya", "Guava", "Lemon", "Durian"];

    // array_splice("ชื่อ Array", "ตำแหน่ง Index", "จำนวนที่ต้องการลบ");
    print_r($fruits);
    print("<br>");

    //เพิ่มข้อมูลต่อจากindex 1    //เลข 0 คือ ต้องการเพิ่ม
    $newfruits = array("Grap", "Mango");
    array_splice($fruits, 1, 0, $newfruits);
    print_r($fruits);
    print("<br>");

    

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function แทรกสมาชิกใน Array</title>
</head>
<body>
    
</body>
</html>
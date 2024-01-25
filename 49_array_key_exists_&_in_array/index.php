<?php

    // แบบเดี่ยว
    $number = [10, 20, 15, 20, 30, 10, 20];

    // แบบคู่
    $colors = ["red" => "สีแดง", "yellow" => "สีเหลือง", "green" => "สีเขียว"];

    /*
    if (array_key_exists("red", $colors)){
        print("พบคีย์ red ใน Array Color");
    }else{
        print ("ไม่พบ Key");
    }
    */
    
    if (in_array("สีแดง", $colors)){
        print ("พบค่า");
    }else{
        print ("ไม่พบค่า");
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function ค้นหาข้อมูลใน Array</title>
</head>

<body>

</body>

</html>
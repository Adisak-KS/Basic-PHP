<?php
    $str = "Hello PHP I Love PHP";

    // $result = strstr($str, "Hello"); // ให้ความสำคัญกับตัวพิมพ์เล็ก - ใหญ่
    $result = stristr($str, "hello"); // ไม่ให้ความสำคัญกับตัวพิมพ์เล็ก -ใหญ่

    if($result){
        print("พบข้อความ");
    }else{
        print ("ไม่พบข้อความ");
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาตัวอักษรใน String</title>
</head>

<body>

</body>

</html>
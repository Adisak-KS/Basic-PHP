<?php

    date_default_timezone_set("Asia/bangkok");
    print_r (getdate());
    echo "<br>";
    echo "<hr>";

    $date_time = getdate();
    echo "วันที่ : ". $date_time["mday"] ."<br>";
    echo "เดือน : ". $date_time["month"] ."<br>";
    echo "ปี : ". $date_time["year"] ."<br>";
    echo "<hr>";

    echo $date_time["mday"], " : ", $date_time["month"], " : ", $date_time["year"]; 
    echo "<hr>";
    
    echo "ชั่วโมง : ". $date_time["hours"] ."<br>";
    echo "นาที : ". $date_time["minutes"] ."<br>";
    echo "วินาที : ". $date_time["seconds"] ."<br>";
    echo "<hr>";

    echo $date_time["hours"], " : ", $date_time["minutes"], " : ", $date_time["seconds"];


    
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getdata()</title>
</head>

<body>

</body>

</html>
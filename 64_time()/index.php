<?php

    date_default_timezone_set("Asia/bangkok");
    echo time();
    
    echo "<br>";

    echo date("วันปัจจุบัน : ". "d/m/Y", time());
    echo "<br>";


    $days3 = time() + (60 * 60 * 24 * 3);
    echo " 3 วัน ข้างหน้า : ". date( "d/m/Y", $days3);
    echo "<br>";

    $week = time() + (60 * 60 * 24 * 7);
    echo " สัปดาห์หน้า : ". date( "d/m/Y", $week);
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการเวลาด้วย time()</title>
</head>

<body>

</body>

</html>
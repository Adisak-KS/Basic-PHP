<?php

    // แบบคู่
    $arr = ["A" => 20, "C" => 15, "B" => 30, "D" => 25];
    $contry = ["TH" => "ไทย", "JP" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];


    // เรียงข้อมูล
    print_r($arr);
    print ("<br>");
    asort($arr);    // น้อยไปมาก
    print_r($arr);
    print ("<hr>");

    print_r($contry);
    print ("<br>");
    asort($contry);    // น้อยไปมาก
    print_r($contry);
    print ("<hr>");

    ///////////////////////
    print_r($arr);
    print ("<br>");
    arsort($arr);    // น้อยไปมาก
    print_r($arr);
    print ("<hr>");

    print_r($contry);
    print ("<br>");
    arsort($contry);    // น้อยไปมาก
    print_r($contry);
    print ("<hr>");




    // เรียง index
    $arr = ["A" => 20, "C" => 15, "B" => 30, "D" => 25];
    $contry = ["TH" => "ไทย", "JP" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];

    print_r($arr);
    print ("<br>");
    ksort($arr);    // เรียง index น้อยไปมาก
    print_r($arr);
    print ("<hr>");


    print_r($arr);
    print ("<br>");
    krsort($arr);    // เรียง index มากไปน้อย
    print_r($arr);
    print ("<hr>");

    ///////////////////////////
    print_r($contry);
    print ("<br>");
    ksort($contry);    // A-Z
    print_r($contry);
    print ("<hr>");

    print_r($contry);
    print ("<br>");
    krsort($contry);    // Z - A
    print_r($contry);
    print ("<hr>");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function เรียงลำดับ Array แบบจับคู่</title>
</head>

<body>

</body>

</html>
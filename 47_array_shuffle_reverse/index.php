<?php

    /*
    // แบบเดี่ยว
    $number = [10, 2, 3, 45, 150, 60, -10, 30, 40, 60, 70];
    $city = ["Chonburi", "Rayong", "Kanchanaburi", "Chiang mai", "Nakhon phanom", "Mukdahan", "Kalasin"];

    // แบบคู่
    $arr = ["A" => 20, "C" => 15, "B" => 30, "D" => 25];
    $contry = ["TH" => "ไทย", "JP" => "ญี่ปุ่น", "US" => "สหรัฐอเมริกา", "CN" => "จีน"];

    print_r($contry);
    print "<br>";
    shuffle($contry); // สลับค่า
    print_r($contry);
    print "<hr>";

    print_r($city);
    print "<br>";
    shuffle($city); // สลับค่า
    print_r($city);
    print "<hr>";

    */

    $number = range(1,10);
    print_r($number);
    print "<br>";

    $new_number = array_reverse($number);
    print_r($new_number);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function สลับค่าใน Array</title>
</head>

<body>

</body>

</html>
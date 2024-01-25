<?php

// แบบเดี่ยว
$number = [10, 2, 3, 45, 150, 60, -10, 30, 40, 60, 70];
$city = ["Chonburi", "Rayong", "Kanchanaburi", "Chiang mai", "Nakhon phanom", "Mukdahan", "Kalasin"];


// สมาชิกเป็นตัวเลข
print_r($number);
print("<br>");

//เรียงลำดับจากน้อยไปมาก
sort($number);
print_r($number);
print("<hr>");


//เรียงลำดับจากมากไปน้อย
print_r($number);
print("<br>");

rsort($number);
print_r($number);
print("<hr>");


/////////////////////////////
print_r($city);
print("<br>");

//เรียงลำดับจาก A - Z
sort($city);
print_r($city);
print("<hr>");

print_r($city);
print("<br>");

//เรียงลำดับจาก Z - A
rsort($city);
print_r($city)



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function เรียงลำดับสมาชิกใน Array</title>
</head>

<body>

</body>

</html>
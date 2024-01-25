<?php
    /*
    $txt = "gradeABCD"; //มองให้เป็น Array ดังนี้ char = [A, d, i, s, a, k];

    echo $txt ."<br>";
    echo substr($txt, 5) ."<br>"; //จุดเริ่มต้น
    echo substr($txt, 5, 4) ."<br>"; //ตัดที่ 5 และนับไปอีก 4 ตัว
    */
    
    $txt = "adisakza";
    $arr = str_split($txt,4);

    print_r($arr);
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubString และ Split</title>
</head>

<body>

</body>

</html>
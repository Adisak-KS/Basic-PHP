<?php
    
    // แบบ 2 มิติ
    $products = array(
        array ("Keyboard", "คีย์บอร์ด", 900),
        array ("Mouse", "เม้าส์", 1900),
        array ("Table", "โต๊ะ", 2500),
    );

    // การเข้าถึง Variable => Row => Column
    print($products[0][0] ."<br>");
    print($products[1][1] ."<br>");
    print($products[2][2] ."<br>");

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2 มิติ</title>
</head>
<body>
    
</body>
</html>
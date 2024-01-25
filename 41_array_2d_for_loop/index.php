<?php
    
    // แบบ 2 มิติ
    $products = array(
        array ("Keyboard", "คีย์บอร์ด", 900),
        array ("Mouse", "เม้าส์", 1900),
        array ("Table", "โต๊ะ", 2500),
        array ("Monitor", "จอ", 12000),
    );

    // การเข้าถึง Variable => Row => Column
    for($row = 0; $row < count($products); $row++){
        print("ชิ้นที่ : ". $row ."<br>");
        
        for($column = 0; $column < count($products[$row]); $column++){
            print($products[$row][$column] ."<br>");
        }
        print ("<hr>");
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าถึง Array 2 มิติ ด้วย For Loop</title>
</head>
<body>
    
</body>
</html>
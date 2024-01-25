<?php
    
    // แบบ 2 มิติ
    /*
    $products = array(
        array ("Keyboard", "คีย์บอร์ด", 900),
        array ("Mouse", "เม้าส์", 1900),
        array ("Table", "โต๊ะ", 2500),
        array ("Monitor", "จอ", 12000),
    );

    // การเข้าถึง Variable => Row => Column
    foreach($products as $product){
        print ("ชื่อสินค้า (ENG) : ". $product[0] ."<br>");
        print ("ชื่อสินค้า (TH) : ". $product[1] ."<br>");
        print ("ราคา : ". $product[2] ." บาท" ."<br>");
        print ("<hr>");
    }
    */

    $products = array(
        array ("EN" => "Keyboard", "TH" => "คีย์บอร์ด", "PRICE" => 900),
        array ("EN" => "Mouse", "TH" =>  "เม้าส์", "PRICE" => 1900),
        array ("EN" => "Table", "TH" =>  "โต๊ะ", "PRICE" => 2500),
        array ("EN" => "Monitor", "TH" =>  "จอ", "PRICE" => 12000),
    );

    // การเข้าถึง Variable => Row => Column
    foreach($products as $product){
        print ("ชื่อสินค้า (ENG) : ". $product["EN"] ."<br>");
        print ("ชื่อสินค้า (TH) : ". $product["TH"] ."<br>");
        print ("ราคา : ". $product["PRICE"] ." บาท" ."<br>");
        print ("<hr>");
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าถึง Array 2 มิติ ด้วย ForEach</title>
</head>
<body>
    
</body>
</html>
<?php
     /*
    $arr1 = ["product" => "Table", "color" => "Orange", "price" => 500];
    $arr2 = ["discount" => 100, "delivery" => 30, "price" => 3000];

   
    //หากมี index ซ้ำกัน จะนำค่าข้อมูล Array ชุดหลังมาทับ Array ชุดแรก
    // $result = array_merge($arr1, $arr2);

    // เอาข้อมูลใหม่มาต่อท้าย
    $result = array_merge_recursive($arr1, $arr2);
    print_r($result);
    */


    $arr1 = ["dog", "cat", "pig", "ant"];
    $arr2 = ["สุนัข", "แมว", "หมู", "มด"];

    $result = array_combine($arr1, $arr2);

    print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function รวมข้อมูลใน Array</title>
</head>

<body>

</body>

</html>
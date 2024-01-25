<?php

    /*
    $arr = ["HEllo", "World", "I", "Love", "Php"];

    // echo $arr[0], $arr[1], $arr[2];

    // $str = implode("-", $arr); //รวม string โดยแยกข้อความด้วย -
    $str = join("-", $arr); //รวม string โดยแยกข้อความด้วย -
    echo $str;
    echo "<hr>"

    */

    /// String => Array
    $str = "Adisak :20 :Huahin";
    $arr = explode(":", $str);
    print_r($arr);
    echo "<hr>";

    echo "Your Name : ". $arr[0] ."<br>";
    echo "Your Age : ". $arr[1] ."<br>";
    echo "Your Address : ". $arr[2] ."<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การรวมและการแยก String</title>
</head>

<body>

</body>

</html>
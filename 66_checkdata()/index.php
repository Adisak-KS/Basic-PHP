<?php

    date_default_timezone_set("Asia/bangkok");
    
    $result = checkdate(2, 29, 2024);

    if($result){
        echo "รูปแบบวัน ถูกต้อง";
    }else{
        echo "รูปแบบวัน ไม่ถูกต้อง";
    }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkdata()</title>
</head>

<body>

</body>

</html>
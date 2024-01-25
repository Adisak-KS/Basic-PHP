<?php

    $pass = "hello";
    echo "Password : ". $pass ."<br>";

    $result = md5($pass);
    echo "md5 : ". $result ."<br>";

    $result = sha1($pass);
    echo "sha1 : ". $result ."<br>";

    $result = crypt($pass, "//dd");
    echo "crypt : ". $result ."<br>";

    $encode = base64_encode($pass);
    echo "base64_encode : ". $encode ."<br>";

    $result = base64_decode($encode);
    echo "base64_decode : ". $result ."<br>";
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเข้ารหัสและถอดรหัส String</title>
</head>

<body>

</body>

</html>
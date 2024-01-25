<?php

  // area = Width x Height
  
  $width = 40;
  $height = 30;

  if($width > 0 && $height > 0){
    $area = $width * $height;
    echo "พื้นที่สี่เหลี่ยม = ". $area ." ตารางนิ้ว";
  }else{
    echo "ตัวเลขความกว้างและความสูง มีค่ามากกว่า 0 ";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>คำนวณพื้นที่สี่เหลี่ยม</title>
</head>

<body>

</body>

</html>
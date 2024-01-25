<?php
  
  $balance = 1000;
  $transfer = 1000;

  echo "มีเงินในบัญชี : " .$balance ." บาท <br>";
  if($transfer <= $balance){
    echo "สามารถกดเงินได้ <br>";
    $balance =  $balance - $transfer;
    echo "เหลือเงิน : ". $balance ." บาท <br>";
  }
  echo "จบการทำงาน";
  
?> 

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>if...else</title>
</head>

<body>

</body>

</html>
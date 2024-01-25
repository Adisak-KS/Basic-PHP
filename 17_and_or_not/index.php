<?php
  $balance = 1000;
  $withdraw = 0;

  // $a = $withdraw <= $balance ; // ผลการเปรียบเทียบจำนวนเงิน
  // $b = $withdraw > 0; //ถอนเงินมากกว่า 0


  echo "มีเงินในบัญชี : " . $balance . " บาท <br>";
  echo "ถอนเงิน : " . $withdraw . " บาท <br><hr>";

  if ($withdraw <= $balance && $withdraw > 0) {
    echo "สามารถกดเงินได้ <br>";
    $balance -= $withdraw;
    echo "เหลือเงิน : " . $balance . " บาท <br>";
  }else{
    echo "ยอดเงินไม่เพียงพอ" ."<br>";
  }
  echo "คืนบัตรกดเงิน";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>And Or Not</title>
</head>

<body>

</body>

</html>
<?php
$balance = 1000;
$withdraw = 11000;

echo "มีเงินในบัญชี : " . $balance . " บาท <br>";
echo "ถอนเงิน : " . $withdraw . " บาท <br><hr>";

if ($withdraw <= $balance) {
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
  <title>If...else</title>
</head>

<body>

</body>

</html>
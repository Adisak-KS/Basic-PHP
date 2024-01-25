<?php
  $a = 5;
  $b = 10;

  /* เพิ่มค่า */
  echo "Default : " .$a ."<br>";
  echo "เพิ่มค่าแบบ Prefix = ".(++$a) ."<br>";
  echo "ค่าล่าสุดของ a = ".($a) ."<br>";
  echo "<hr>";

  $a = 5;
  echo "Default : " .$a ."<br>";
  echo "เพิ่มค่าแบบ Posfix = ".($a++) ."<br>";
  echo "ค่าล่าสุดของ a = ".($a) ."<br>";
  echo "<hr>";

  /* ลเค่า */
  echo "Default : " .$b ."<br>";
  echo "ลดค่าแบบ Prefix = ".(--$b) ."<br>";
  echo "ค่าล่าสุดของ b = ".($b) ."<br>";
  echo "<hr>";

  $b = 10;
  echo "Default : " .$b ."<br>";
  echo "ลดค่าแบบ Prefix = ".($b--) ."<br>";
  echo "ค่าล่าสุดของ b = ".($b) ."<br>";


?> 

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ตัวดำเนินการเพิ่มค่า - ลดค่า</title>
</head>

<body>

</body>

</html>
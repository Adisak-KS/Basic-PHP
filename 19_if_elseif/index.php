<?php

  /* 
    คะแนน (score)

    มากกว่า 80 => A
    มากกว่า 70 => B
    มากกว่า 60 => C
    มากกว่า 50 => D
    ไม่ถึง   50 => F

    */

  $score = 999;
  $grade = "";

  echo "คะแนนของคุณ : " . $score . " คะแนน" . "<br>";

  if ($score < 0 || $score > 100) {
    echo "กรุณากรอกคะแนน 0 - 100";
  } else {
    if ($score >= 80) {
      $grade = "A";
    } elseif ($score >= 70) {
      $grade = "B";
    } elseif ($score >= 60) {
      $grade = "C";
    } elseif ($score >= 50) {
      $grade = "D";
    } else {
      $grade = "F";
    }
    echo "เกรดของคุณคือ " . $grade;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If แบบหลายเงื่อนไข</title>
</head>

<body>

</body>

</html>
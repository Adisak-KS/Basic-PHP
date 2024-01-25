<?php
   $total1 = null;
   $total2 = "";
   $total3 = 0;
   $total4 = "Adisak";

   // ยกเลิกตัวแปร
   // unset ($total4);


   echo "ตัวแปร total1 : ". $total1 ."<br>";
   echo "ตัวแปร total1 มีการกำหนดค่าหรือไม่ : ". isset($total1) ."<br>"; // ไม่มีการกำหนดค่า ไม่แสดงอะไร
   echo "ตัวแปร total1 มีค่าว่างหรือ 0 หรือไม่ : ". empty($total1) ."<br>"; // ถ้าเป็นค่าว่าง, 0, null ให้แสดง 1
   echo "ตัวแปร total1 กำหนดเป็น null หรือไม่ : ". is_null($total1) ."<br>"; // กำหนดเป็น Null แสดง 1 ไม่กำหนด ไม่แสดง
   echo var_dump($total1);
   echo "<hr>";

   echo "ตัวแปร total2 : ". $total2 ."<br>";
   echo "ตัวแปร total2 มีการกำหนดค่าหรือไม่ : ". isset($total2) ."<br>"; // มีการกำหนดค่า แสดง 1
   echo "ตัวแปร total2 มีค่าว่างหรือ 0 หรือไม่ : ". empty($total2) ."<br>"; // ถ้าเป็นค่าว่าง, 0, null ให้แสดง 1
   echo "ตัวแปร total2 กำหนดเป็น null หรือไม่ : ". is_null($total2) ."<br>"; // กำหนดเป็น Null แสดง 1 ไม่กำหนด ไม่แสดง
   echo var_dump($total2);
   echo "<hr>";

   echo "ตัวแปร total3 : ". $total3 ."<br>"; 
   echo "ตัวแปร total3 มีการกำหนดค่าหรือไม่ : ". isset($total3) ."<br>"; // มีการกำหนดค่า แสดง 1
   echo "ตัวแปร total3 มีค่าว่างหรือ 0 หรือไม่ : ". empty($total3) ."<br>"; // ถ้าเป็นค่าว่าง, 0, null ให้แสดง 1
   echo "ตัวแปร total3 กำหนดเป็น null หรือไม่ : ". is_null($total3) ."<br>"; // กำหนดเป็น Null แสดง 1 ไม่กำหนด ไม่แสดง
   echo var_dump($total3);
   echo "<hr>";
   
   echo "ตัวแปร total4 : ". $total4 ."<br>";
   echo "ตัวแปร total4 มีการกำหนดค่าหรือไม่ : ". isset($total4) ."<br>"; // มีการกำหนดค่า แสดง 1
   echo "ตัวแปร total4 มีค่าว่างหรือ 0 หรือไม่ : ". empty($total4) ."<br>"; // ไม่ป็นค่าว่าง ไม่แสดงอะไร
   echo "ตัวแปร total4 กำหนดเป็น null หรือไม่ : ". is_null($total4) ."<br>"; // กำหนดเป็น Null แสดง 1 ไม่กำหนด ไม่แสดง
   echo var_dump($total4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ฟังก์ชั่นที่ทำงานเกี่ยวกับตัวแปร</title>
</head>

<body>

</body>

</html>
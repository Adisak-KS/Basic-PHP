<?php

    $str1 = "ADIsak";
    $str2 = "adisak";

    /*
    // $result = strcmp($str1, $str2); // case มาเปรียบเทียบ

    $result = strcasecmp($str1, $str2); // ไม่คิด case พิมพ์ใหญ๋ - พิมพ์เล็ก
    // echo $result;

   if($result != 0){
    echo "ข้อความมีค่าไม่เท่ากัน";
   }else{
    echo "ข้อความมีค่าเท่ากัน";
   }
   */

   /*
   $total = strspn($str1, $str2);
   echo "จำนวนที่พบ = " .$total;
   */

  $total = strcspn($str1, $str2);
  echo "จำนวนที่ไม่พบ = " .$total;
   


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเปรียบเทียบ String</title>
</head>

<body>

</body>

</html>
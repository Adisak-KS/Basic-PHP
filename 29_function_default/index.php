<?php

  // ชื่อ นามสกุล ที่อยู่                        //ค่าเริ่มต้น
  function showData($fname, $lname, $city ="HuaHin"){
    print ("First Name : ". $fname ."<br>");
    print ("Last Name : ". $lname ."<br>");
    print ("Address : ". $city ."<br>");
    print "<hr>";
  }


  showData("Adisak","Khongsuk", "BKK");
  showData("JoJo","Jaidee", "Nan");
  showData("Jimmy","Deedaa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function แบบกำหนดค่าเริ่มต้น</title>
</head>

<body>
 
</body>

</html>
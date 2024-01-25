<?php

  function getAddress(){
    return "Rayong";
  }

  function getBonus(){
    return 10000;
  }


  //เรียกใช้งาน
  $myCity = getAddress();

  print ("My Address : " .$myCity ."<br>");


  $bonus = getBonus();
  print ("My Bonus : " .$bonus ."<br>");
  print ("My Bonus : " . getBonus() ."<br>");

  $salary = 10000 + $bonus;
  print("My Salary + Bonus : " .$salary ."<br>")


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function แบบส่งค่า</title>
</head>

<body>
 
</body>

</html>
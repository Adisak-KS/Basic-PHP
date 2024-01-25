<?php

/*
  $month = 9;

  switch($month){
    case 1 : echo "January";
      break;
    case 2 : echo "February";
      break;
    case 3 : echo "March";
      break;
    case 4 : echo "April";
      break;
    case 5 : echo "May";
      break;
    default : echo "Not Found";
  }

  */

  /* 
    5 Year = 10%
    10 Year = 20%
  */
  $year = 5;

  switch($year){
    case 5 :
      echo "ระยะเวลากู้ ". $year. " ปี คิดดอกเบี้ย 10%";
      break;
    case 10;
      echo "ระยะเวลากู้ ". $year. " ปี คิดดอกเบี้ย 20%";
      break;
    default:
      echo "Not Found";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Case</title>
</head>

<body>

</body>

</html>
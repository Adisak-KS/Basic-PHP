<?php

$count = 1;
$limit = 10;

// while($count <= $limit){
//   echo "รอบที่ : ". $count ."<br>";
//   $count++;
// }
// echo "End";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop</title>
</head>

<body>
  <h1>Menu</h1>

  <!-- <ul>
      <?php 
        // while($count <= $limit){ 
      ?> 
   <li> <?php  
        // echo "อาหารที่ ".$count;
        ?>
    </li
  <?php
  // $count++;
  // }
  ?>
  </ul> -->


  <select name="" id="">
    <?php while ($count <= $limit) { ?>
      <option value="<?php echo $count; ?>">รายการที่  <?php echo $count; ?></option>
      <?php 
        $count++; 
      ?>
    <?php } ?>
  </select>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>print กับ echo ต่างกันอย่างไร</title>
   <style>
      h1{
         text-align: center;
      }
   </style>
</head>
<body>
   <h1>PHP ร่วมกับ HTMl</h1>
   <?php
      echo "Adisak ECHO <br>";
      echo "<b>studio</b>";
      echo "<h1>Learning PHP</h1>";


      print("Adisak print");
   ?>

   <form action="">
      <label for="">Name :</label>
      <input type="text" name="" id="" value="<?php echo "Adisak" ?>">
      <label for="">Lastname :</label>
      <input type="text" name="" id="" value="<?php echo "Khongsuk" ?>">
   </form>


</body>
</html>
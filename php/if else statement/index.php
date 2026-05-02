<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> if else statement</title>
  </head>
  <body>
    <?php

      $a = 30;
      $b = 3;

      if($a > 30){
        echo "a is greater <br>";
      }else{
        echo "a is smaller <br>";
      }

      if($a == 30){
        echo "a is same <br>";
      }else{
        echo "a is not same <br>";
      }

      if($a === '30'){
        echo "a is same <br>";
      }else{
        echo "a is not same <br>";
      }

      $name = "Arafat";
      $gender = "female";

      if($gender == "male"){
        echo "hello MR, " . $name;
      }else{
        echo "hello miss, " . $name;
      }

     ?>
  </body>
</html>

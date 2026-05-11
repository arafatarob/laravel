<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Continue & Break Statement</title>
  </head>
  <body>

    <?php

      for($a = 1; $a <= 10; $a++){
        if($a == 3){
          continue;
        }
        echo "Number: " . $a . "<br>";
      }

      echo "<br>";

      for($a = 1; $a <= 10; $a++){
        if($a == 3){
          echo "No. " . $a . "<br>";
          break;
        }
        echo "Number: " . $a . "<br>";
      }


    ?>
  </body>
</html>

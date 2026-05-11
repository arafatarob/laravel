<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>nested loop</title>
  </head>
  <body>

    <?php

      for($a = 1; $a <= 100; $a = $a + 10){
        for($b = $a; $b < $a + 10; $b++){
          echo $b . " ";
        }
        echo "<br>";
      }

    ?>
  </body>
</html>

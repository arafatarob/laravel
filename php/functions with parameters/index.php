<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions with parameters</title>
  </head>
  <body>

    <?php

      function myName($name, $age){
        echo "hello!, My Name is $name. I am $age years old. <br> ";
      }

      function sum($sum1, $sum2){
        echo $sum1 + $sum2;
      }

      myName('Arafat', 22);

      myName('Iftiyatul Jannat', 21);

      sum(22, 22);
      echo "<br>";
      sum(12, 22);


    ?>
  </body>
</html>

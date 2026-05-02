<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>swtich statement</title>
  </head>
  <body>


    <?php

        $weekday = 3;

        switch($weekday){
          case 1:
            echo "Today is Monday";
          break;

          case 2:
            echo "Today is Tuesday";
          break;

          case 3:
            echo "Today is Wednesday";
          break;

          case 4:
            echo "Today is Thursday";
          break;

          case 5:
            echo "Today is Friday";
          break;

          case 6:
            echo "Today is Saturday";
          break;

          case 7:
            echo "Today is Sunday <br>";
            echo "Today is also Bank Holiday";
          break;

          default:
          echo "Enter the Valid Weekday";
        }

        echo "<br>";

        $age = 32;

        switch(true){
          case ($age >= 15 && $age <= 20):
            echo "You are Eligible";
            break;
          case ($age >= 21 && $age <= 30):
            echo "You are not Eligible";
            break;
          default:
          echo "enter a valid age";
          break;
        }

     ?>

  </body>
</html>

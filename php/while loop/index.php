<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>while loop</title>
  </head>
  <body>

    <?php
      $a = 0;
      echo '<ul>';
      while($a <= 10 ){
        echo "<li>" . "$a . Arafat" . "</li>";
        $a++;
      }
      echo '</ul>';


      $a = 10;
      echo '<ul>';
      while($a >= 0 ){
        echo "<li>" .  "$a . Arafat" . "</li>";
        $a--;
      }
     echo '</ul>';
    ?>
  </body>
</html>

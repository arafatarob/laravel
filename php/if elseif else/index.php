<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>if elseif else</title>
  </head>
  <body>

    <?php


      $per = 2;

      if($per >= 80 && $per <= 100){
        echo "you are in merit.";
      }elseif($per >= 60 && $per < 80){
        echo "you are in 1st division.";
      }elseif($per >= 45 && $per < 60){
        echo "you are in 2st division.";
      }elseif($per >= 33 && $per < 45){
        echo "you are in 3st division.";
      }elseif($per < 33){
        echo "you are failed.";
      }else{
        echo "please enter the valid percentage.";
      }

      echo "<br>";


      if($per >= 80 && $per <= 100):
        echo "you are in merit.";
        elseif($per >= 60 && $per < 80):
        echo "you are in 1st division.";
        elseif($per >= 45 && $per < 60):
        echo "you are in 2st division.";
        elseif($per >= 33 && $per < 45):
        echo "you are in 3st division.";
        elseif($per < 33):
        echo "you are failed.";
        else:
        echo "please enter the valid percentage.";
      endif;


     ?>

  </body>
</html>

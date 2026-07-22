<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>first API</title>
  </head>
  <body>
    <?php

      $data = [
        "status" => true,
        "message" => "Hello API",
        "name" => "Arafat",
        "student" => true
      ];

      $data2 = [
        "city" => "Dhaka",
        "age" => 22
      ];

      echo json_encode($data);
      echo json_encode($data2);


     ?>
  </body>
</html>

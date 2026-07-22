<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post API</title>
  </head>
  <body>

    <?php

      header("Content-Type: application/json");
      $_POST = [
        'name' => 'Arafat',
        'age' => '22',
        'city' => 'Dinajpur'
      ];

      $name = $_POST['name'];
      $age = $_POST['age'];
      $city = $_POST['city'];

      echo json_encode([
        "name" => $name,
        "age" => $age,
        "city" => $city
      ]);

    ?>

  </body>
</html>

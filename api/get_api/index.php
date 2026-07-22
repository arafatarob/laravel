<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>get API</title>
  </head>
  <body>
    <?php
    header("Content_type: application/json");
      $id = $_GET['id'];

      if($id == 1){
        $students = [
          "id" => 1,
          "name" => "Md Arafat Hossain",
          "age" => 22,
          "city" => "Dhaka"
        ];
      }else{
        $students = [
          "message" => "students not found"
        ];
      }

      echo json_encode($students);

     ?>
  </body>
</html>

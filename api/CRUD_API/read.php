<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>READ</title>
  </head>
  <body>
    <?php
      include("./config/db.php");

      header("Content-Type: application/json");
      $select = $conn->query("SELECT * FROM students");

      $students = [];

      while ($row = mysqli_fetch_assoc($select)) {
        $students[] = $row;
      }

      echo json_encode($students);
    ?>
  </body>
</html>

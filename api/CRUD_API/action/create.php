<?php

    include("../config/db.php");
    header("Content-Typer: application/json");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $subject = $_POST['subject'];

    $insert = $conn->query("INSERT INTO students(name, age, subject)
      VALUES('$name', '$age', '$subject')
    ");

    if ($insert) {
      echo json_encode([
        "status" => true,
        "message" => "Students added"
      ]);
    }else{
      echo json_encode([
        "status" => false,
        "message" => "Students not added"
      ]);
    }
?>

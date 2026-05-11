<?php 

    include 'connect.php'; 

    if(!empty($_POST)){
        $file = $_FILES['fileToUpload']['name'];
        $tmp_file = $_FILES['fileToUpload']['tmp_name'];
        $upload = "images/" . $file;

        $insert = $conn->query("INSERT INTO image(image_name) VALUES('$file') ");

        if($insert){
            echo "image uploaded Successfully";
        }else{
            echo "image uploaded failed";
        }

        if(move_uploaded_file($tmp_file, $upload)){
            echo "file uploaded successfully";
        }else{
            echo "file uploaded failed";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <style>
        .input input {
    width: calc(100% - 46px);
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 10px 20px;
    margin-top: 15px;
    margin-bottom: 15px;
    border-radius: 6px;
    cursor: pointer;
}
.input {
    width: calc(400px - 20px);
}
    </style>
</head>
<body>

    <h1>Upload an Image</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="input">
            <label for="fileToUpload">Select image to upload:</label>
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
        </div>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Handler</title>
</head>
<body>
    <?php 
        if(isset($_POST["submit"])){
            // Define the target directory
            

            //Ensure the directory exists
            // if (!file_exists($targetDir)) {
            //     mkdir($targetDir, 0777, true); 
            // }

            $targetDir = "uploads/";
            $fileName = basename($_FILES['photo']['name']);

            $targetFile = $targetDir . $fileName;

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
                echo "<h3>File uploaded successfully!</h3>";
                echo "<img src='$targetFile' alt='Uploaded Photo' style='width: 300px;'>";
            } else {
                echo "<h3>Sorry, there was an error uploading your file.</h3>";
            }
    }
    ?>
</body>
</html>
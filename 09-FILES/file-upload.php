<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>File Uploads in PHP</h1>
    <form enctype="multipart/form-data" action="process.php" method="post">
        Name: <input type="text" name="name"> <br>
        Upload a Photo: <input type="file" name="photo" id="file" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
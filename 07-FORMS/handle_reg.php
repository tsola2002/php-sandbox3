<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Processing</title>
</head>
<body>
    <?php 
    
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"])) {
        echo "Your Form details are the following" . $_POST["name"] . " " . $_POST["email"] . " " . $_POST["password"] . " " . $_POST["dob"];
        } else {
        echo "Please Complete the form";
        }
    
    ?>
</body>
</html>
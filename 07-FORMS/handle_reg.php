<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Processing</title>
</head>
<body>
    <?php 
    
        //header("location: feedback.php");

        var_dump(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));

        echo "<br>";

        var_dump(filter_var('https://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));

        // if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"])) {
        // echo "Your Form details are the following" . $_POST["name"] . " " . $_POST["email"] . " " . $_POST["password"] . " " . $_POST["dob"];
        // } else {
        // echo "Please Complete the form";
        // }
    
    ?>
</body>
</html>
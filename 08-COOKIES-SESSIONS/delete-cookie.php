<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie</title>
</head>
<body>
    <h1>Deleting cookies</h1>

    <?php 
    // this will delete the cookie
    setcookie("username","", time() - 100);

    // accessing the deleted cookie
    echo "Hello" . $_COOKIE["username"];
    ?>
</body>
</html>
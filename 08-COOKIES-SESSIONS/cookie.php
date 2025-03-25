<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Working With Cookies in PHP</h1>

    <?php 
        setcookie("username","Omatsola", time() + 60);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors</title>
</head>

<body>
    <h1>Working With Errors in PHP</h1>
    <?php
    if (!file_exists("hello.txt")) {
        die("File not found");
    } else {
        $file = fopen("hello.txt", "r");
        echo "File was found";
    }
    ?>

</body>

</html>
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

    function customErrorHandler($errno, $errstr, $errfile, $errline) {

        echo "New Error: [$errno] $errstr in $errfile on line $errline \n";
    }

    set_error_handler("customErrorHandler");

    echo $somefile;

    ?>

</body>

</html>
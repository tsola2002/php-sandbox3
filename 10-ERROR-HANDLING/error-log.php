<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Log</title>
</head>
<body>
    <h1>Using Error Logs in PHP</h1>
    <?php 

    // specify the file where the error messages will be sent to
    //$logFile = "/Applications/MAMP/htdocs/niit/12-exceptions/error_log.txt";
    $logFile = dirname(__FILE__) . "/error-log.txt";

    //echo $logfile;

    // create error message
    $errorMsg = "An error occurred" . date('Y-m-d H:i:s');

    // log the error message
    error_log($errorMsg . "\n", 3, $logFile);

    //output a message to indicate that the error has been logged
    echo "Error logged successfully. Check ". $logFile . " for details";


?>
</body>
</html>
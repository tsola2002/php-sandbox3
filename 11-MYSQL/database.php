<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql and php</title>
</head>
<body>
    <h1>Integrating PHP with mysql</h1>
    <?php
        $hostname = 'localhost';
        $dbname = 'DB_JOB';
        $username = 'root';
        $password = 'root';

        // 1. this will create a connection to our database
        global $connection;
        $connection = mysqli_connect($hostname, $username, $password, $dbname);

        // 2. testing connection for errors 
        // if(!$connection){
        //     die('Could not connect to the database'. mysqli_connect_error());
        // } else {
        //     echo 'Succesfully Connected to the database';
        // }


  
    $query = 'SELECT * FROM TBL_USER';
    $result = $connection->query($query);

    echo "<table border='1'>";
    echo "<tr><th>User ID</th><th>Name</th><th>Qualification</th><th>Experience</th></tr>";

    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo "<tr><td>" . $row['userid'] . "</td><td>"
            . $row['name'] . "</td><td>"
            . $row['qualification'] . "</td><td>"
            . $row['experience'] . "</td></tr>";
    }

    echo"</table>";
    ?>
</body>
</html>
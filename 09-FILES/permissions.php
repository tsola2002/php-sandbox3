<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Permissions</title>
</head>
<body>
    <h1>Working With File Permissions</h1>
    <?php
        $resource = "file.php";
        $username = "root";


        chown($resource, $username);

        // $resource2 = "code.txt";

        // link($resource, 'code2.txt');
        chmod($resource,0777);

        $userinfo = posix_getpwuid(501);

        //print_r($userinfo);
        
        echo $userinfo["passwd"] . "<br>";

        // view permissions of the file
        echo "Is Readable: " . is_readable($resource) . "<br>";
        echo "Is Writable: " . is_writeable($resource) . "<br>";
        echo "Is Executable: " . is_executable($resource) . "<br>";





        // viewing file details
        // echo "The File size is: " . filesize($resource) . "<br>";
        // echo "Last modified date/time: " . strftime('%m/%d/%Y %H:%M', filemtime($resource)) . "<br>";

        // echo "Last changed date/time: " . strftime('%m/%d/%Y %H:%M', filectime($resource)) . "<br>";

        // echo "Last accessed date/time: " . strftime('%m/%d/%Y %H:%M', fileatime($resource)) . "<br>";

        // echo "File Owner of file.php is: " . print_r(posix_getpwuid(fileowner($resource))) . "<br>";

        


        // $pathToFile = pathinfo(__FILE__);
        // echo "Path to directory: " . $pathToFile['dirname'] . "<br>";

        // echo "Full file name: " . $pathToFile['basename'] . "<br>";

        // echo "Extension name: " . $pathToFile['extension'] . "<br>";

        // echo "file name: " . $pathToFile['filename'] . "<br>";
    ?>
</body>
</html>
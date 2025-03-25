<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
    <h1>Working with Files in PHP</h1>
    <?php 

        // 1. this code creates a new file document
        // if (touch("intro.php")){
        //     echo "A file was created";
        // } else {
        //     echo "There was an error creating the file";
        // }

        // 2.  Deleting a file
        // if(unlink("words.txt")){
        //     echo "Success: A file has been deleted";
        // } else {
        //     echo "Failure: File has not been deleted";
        // }

        // 3. Opening a file 
            
        // $handler = fopen("words.txt", "a");
        // $data = "We Just Added this content to our file \n";
        // fwrite($handler, $data);
        // fwrite($handler,"Another line of text for us");  
        // fclose($handler);


        // 4. create and add content at the same time 
        // file_put_contents("words.txt", $data);

        // 5. reading contents of our file 
        // $handler = fopen("words.txt", "r");
        // $content = fread($handler,filesize("words.txt"));
        // fclose($handler);

        // echo $content;

        //echo file_get_contents("words.txt");

        // 6. creating a folder 
        // if(mkdir("my-folder")) {
        //     echo "Folder was created";
        // } else {
        //     echo "Folder was not created";
        // } 

        // 7. Deleting a folder 
        // rmdir("my-folder");

        // 8. Making a copy of a file 
        // echo "words.txt has been duplicated." . copy("words.txt", "words2.txt") . "<br>";

        // 9. Renaming a file 
        // rename("words2.txt","code.txt");
        
    ?>
</body>
</html>
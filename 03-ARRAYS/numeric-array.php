<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Arrays</title>
</head>
<body>
    <h1>Numeric Arrays</h1>
    <?php 
    // CREATE A NUMERIC ARRAY
    // USING BUILT-IN ARRAY FUNCTION
    // $designation = array("HR", "Developer", "Manager", "Accountant");

    //CREATING AN ARRAY USING A LITERAL ARRAY
   $designation = ["HR", "Developer", "Manager", "Accountant"];

   $designation[2] = "Consultant";

    //print_r($designation);
    // var_dump($designation);
    
    echo "<strong>" . $designation[2] . "</strong>";
    
    //var_dump($designation[2]);

    ?>
</body>
</html>
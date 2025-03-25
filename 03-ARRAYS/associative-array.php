<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <h1>Associative Arrays</h1>
    <?php
    //CREATING AN ASSOCIATIVE ARRAY USING BUILT-IN ARRAY FUNCTION
    $details = array("E101" => 20000, "E102" => 15000, "E103" => 25000);


    // CREATING ARRAY USING LITERAL ARRAY
    //$details = ["E101" => 20000, "E102" => 15000, "E103" => 25000];

    //print_r($details);
    // var_dump($details);
    
    //echo $details["E103"];
    // $details["E103"] = 50000;
    // print_r($details);
    
    // $newItems = ["E104" => 30000, "E105" => 45000];
    
    // $finalArray = array_merge($details, $newItems);
    
    // array_pop($details);

    // var_dump($details);
    //print_r($details);
    
    unset($details["E102"]);

    print_r($details);
    ?>
</body>

</html>